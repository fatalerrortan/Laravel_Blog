<!-- include summernote css/js-->
<link href="<?php echo e(asset('domandas/css/textarea.css')); ?>" rel="stylesheet">
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h3><b>Get Help From Your Colleague</b></h3>
        <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title" required>
            
        </div>
        <div class="form-group">
            <label for="keywords">Keywords</label>
            <input type="text" class="form-control" id="keywords" placeholder="plz add hash tag to each keyword like #marketing,#design,#laravel" required>
        </div>
        <div class="form-group">
             <label for="project">Related Project</label>
             <input type="text" class="form-control" id="project" placeholder="plz enter your project id  if necessary">
        </div>
        <div class="form-group">
            <label for="target">Target Expert</label>
            <select class="form-control" id="target" required>
                <option value="IT">IT</option>
                <option value="Design">Design</option>
                <option value="Marketing">Marketing</option>
                <option value="HR">HR</option>
                <option value="Innovation">Innovation</option>
            </select>
        </div>
        <div class="form-group">
            <label for="duration">Answer Duration For Each Challenger</label>
            <select multiple class="form-control" id="duration" required>
                <option value="0.5">0.5 Min.</option>
                <option value="1">1 Min.</option>
                <option value="5">5 Min.</option>
                <option value="10">10 Min.</option>
                <option value="30">30 Min.</option>
                <option value="60">60 Min.</option>
            </select>
        </div>
        <div class="form-group">
                <label for="access">External Access Permission</label>
                <select multiple class="form-control" id="access">
                    <option value="0">Internal Accessible</option>
                    <option value="1">External Accessible</option>
                </select>
        </div>
        <div class="form-group">
            <label for="questionTextarea">Question</label>
            <textarea class="form-control" id="questionTextarea" rows="7"></textarea>
        </div>
        <div class="form-group">
            <label for="questionInputFile">Attachment</label>
            <input type="file" class="form-control-file" id="questionInputFile" aria-describedby="fileHelp">
        </div>
        <button type="button" id="question_submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
<div class="row">
    <div id="dialog" title="Expert Searching..." style="display: none;">
        <div class="progress progress-striped active">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                <span class="sr-only"></span>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#questionTextarea').summernote({
            height: 300                // set editor height
        });
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-question-circle-o' aria-hidden='true'></i>Ask Question</li>"
        );
    });
    $("#question_submit").click(function () {
//        var user_id = $("#user_id").val();
//        var title = $("#title").val();
//        var keywords = $("#keywords").val();
//        var project = $("#project").val();
//        var target = $("#target").val();
//        var duration = $("#duration").val();
//        var access = $("#access").val();
//        var question = $('#questionTextarea').summernote('code');
        $( "#dialog" ).dialog();
        var postData = new FormData();
        postData.append('user_id',$("#user_id").val());
        postData.append('title',$("#title").val());
        var keyword = $("#keywords").val();
        if(keyword.indexOf(",") == -1){
            keyword = keyword + ",";
        }
        postData.append('keywords',keyword);
        postData.append('project',$("#project").val());
        postData.append('target',$("#target").val());
        postData.append('duration',$("#duration").val());
        postData.append('access',$("#access").val());
        postData.append('qfile',$("#questionInputFile")[0].files[0]);
        postData.append('question',$('#questionTextarea').summernote('code'));
        contentChange('POST', '/domanda/question/push', postData);
    });
    function contentChange(method, urlPattern, postData) {
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
//                $("#dashboard_content").html(html);
                alert('We got someone to help you! :)');
                location.reload();
            }
        });
    }
</script>