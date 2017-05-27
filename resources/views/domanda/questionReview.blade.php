<link href="{{asset('domandas/css/textarea.css')}}" rel="stylesheet">
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success"><h1>{{$question->title}}</h1></li>
            <li class="list-group-item">
                <div id="question_boday">
                <?php
                $doc = new DOMDocument();
                libxml_use_internal_errors(true);
                $doc->loadHTML( mb_convert_encoding($question->question, 'HTML-ENTITIES', "UTF-8"));
                libxml_clear_errors();
                echo $doc->saveHTML();
                ?>
                </div>
            </li>
            <li class="list-group-item list-group-item-success"><span><b>Keywords:</b></span> {{$question->keywords}}</li>
            <li class="list-group-item list-group-item-info"><span><b>Created_At:</b></span> {{$question->created_at}}</li>
            <li class="list-group-item list-group-item-danger"><span><b>Related Project:</b></span> {{$question->project}}</li>
            <li class="list-group-item list-group-item-info"><span><b>Target:</b></span> {{$question->target}}</li>
            <li class="list-group-item list-group-item-warning"><span><b>Duration:</b></span> {{$question->duration}} <span>Min.</span></li>
            <?php $access = $question->access ? 'limitless' : 'limited'; ?>
            <li class="list-group-item list-group-item-danger"><span><b>Access:</b></span> <?php echo $access ?></li>
            <?php $attachment = $question->file == null ? "No Attachment" : "<a href='".public_path('uploads/domanda/'.$question->file)."' download>".$question->file."</a>" ?>
            <li class="list-group-item list-group-item-info"><span><b>Attachment:</b></span> <?php echo $attachment ?></li>
            <?php
                switch ($question->status){
                    case 0:
                            $status = '<span style="color:#167AC6">Scanning</span>';
                            break;
                    case 1:
                            $status = '<span style="color: tomato">Processing</span>';
                            break;
                    case 2:
                            $status = '<span style="color: #2ab27b">Done</span>';
                            break;
                    case 4:
                            $status = '<span style="color: #F48024">Evaluating</span>';
                            break;
                    default:
                            $status = '<span style="color:#167AC6">Scanning</span>';
                            break;
            }
            ?>
            <li class="list-group-item list-group-item-success"><span><b>Status:</b></span> <?php echo $status ?></li>
            <li class="list-group-item list-group-item-warning"><span><b>Contributor:</b></span> {{$question->contributor}}</li>
        </ul>
        <hr />
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">
                <h1>Answer</h1>
            </li>
            <li  id="answer_review" class="list-group-item">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div id="answer_boday">
                            <?php
                                if(!empty($question->answer)){
                                    $doc = new DOMDocument();
                                    libxml_use_internal_errors(true);
                                    $doc->loadHTML( mb_convert_encoding($question->answer, 'HTML-ENTITIES', "UTF-8"));
                                    libxml_clear_errors();
                                    echo $doc->saveHTML();
                                }else{
                                    echo "<span class='working'>Your Colleague ". $question->contributor." is working on your Question right NOW!!!</span>";
                                }
                            ?>
                        </div>
                    </li>
                    <?php $attachment = $question->file_answer == null ? "No Attachment" : "<a href='".public_path('uploads/domanda/'.$question->file_answer)."' download>".$question->file_answer."</a>" ?>
                    <li class="list-group-item list-group-item-info working"><span><b>Attachment:</b></span> <?php echo $attachment ?></li>
                    <li class="list-group-item" id="answer_evaluation" style="display: none;">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-3">
                                <button type="button" id="take_answer" class="btn btn-success">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>Accept Answer
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="handover_answer" class="btn btn-danger">
                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>Hand Over
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="list-group-item" id="answer_generate" style="display: none;">
                <div class="form-group">
                    <textarea class="form-control" id="answer_editor" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <label for="questionInputFile">Attachment</label>
                    <input type="file" class="form-control-file" id="answer_file" aria-describedby="fileHelp">
                </div>
                <div class="form-group" id="gamification_1" style="display: none">
                    <img src="{{asset('domandas/img/add.png')}}" class="img-fluid" alt="plus">
                    <img src="{{asset('domandas/img/one.png')}}" class="img-fluid" alt="one">
                </div>
                <button type="button" id="answer_submit" class="btn btn-primary">Submit</button>
            </li>
            <li class="list-group-item" id="wiki" style="display: none;">
                <div id="gamification_2" style="display: none">
                    <img src="{{asset('domandas/img/add.png')}}" class="img-fluid" alt="plus">
                    <img src="{{asset('domandas/img/two.png')}}" class="img-fluid" alt="two">
                </div>
                <h3>Would you like post your contribution to Accenture Wiki?</h3>
                <div class="col-md-offset-4 col-md-3">
                    <button type="button" id="wiki_push" class="btn btn-success">
                        <i class="fa fa-wikipedia-w" aria-hidden="true"></i> Post to Wiki
                    </button>
                </div>
            </li>
        </ul>
    </div>
</div>
<script>
    var current_user = parseInt($("#user_id").val());
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-quora' aria-hidden='true'></i>Question Review</li>"
        );
        var question_owner = parseInt({{$question->owner}});
        var status = parseInt({{$question->status}});
        if((current_user != question_owner) && (status != 2)){
            $("#answer_generate").toggle('slow');
            $(".working").hide();
            $('#answer_editor').summernote({
                height: 300
            });
        }else if((current_user != question_owner) && (status == 2)){
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
            $("#wiki").toggle('slow');
            //gamification + 2 on
            $("#gamification_2").fadeIn('slow');
            $("#gamification_2").effect( "bounce", { times: 5}, "slow");
            $("#gamification_2").fadeOut('slow');
            var postData_2 = new FormData();
            postData_2.append('user_id', current_user);
            postData_2.append('cp', 2);
            contentChange('POST', '/domanda/game', postData_2, 'gamification');
            //gamification + 2 off
        } else {
            if(status == 4){
                $("#answer_evaluation").toggle('slow');
            }
        }
    });
    $("#wiki_push").click(function () {
        alert("In Development :)");
    });
    $("#answer_submit").click(function () {
        //gamification + 1 on
        $("#gamification_1").fadeIn('slow');
//        $("#gamification_1").fadeOut();
        $("#gamification_1").effect( "bounce", { times: 3}, "slow");
        //gamification + 1 off
        var postData = new FormData();
        postData.append('question_id', '{{$question->id}}');
        postData.append('answer',$('#answer_editor').summernote('code'));
        postData.append('afile',$("#answer_file")[0].files[0]);
        contentChange('POST', '/domanda/answer', postData, 'submit');
        var postData_1 = new FormData();
        postData_1.append('user_id', current_user);
        postData_1.append('cp', 1);
        contentChange('POST', '/domanda/game', postData_1, 'gamification');
    });
    $("#take_answer").click(function () {
        var postData = new FormData();
        postData.append('question_id', '{{$question->id}}');
        contentChange('POST', '/domanda/answer/accept', postData, 'accept');
    });
    function contentChange(method, urlPattern, postData, returnPattern) {
        postData.append("_token", CSRF_TOKEN);
        console.log(postData);
        $.ajax({
            type:method,
            url:urlPattern,
            dataType:"text",
            contentType:false,
            cache:false,
            processData:false,
            data:postData,
            success:function(html){
                switch (returnPattern) {
                    case 'submit':
                        alert('Thanks for your contribution, you have just got 1 CP <3');
                        location.reload();
                        break;
                    case 'accept':
                        alert('We are pleased to be of assistance. :)');
                        location.reload();
                        break;
                    case 'gamification':
                        break;
                }
            }
        });
    }
</script>