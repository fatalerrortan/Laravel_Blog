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
            <?php $stauts = $question->is_done ? '<span style="color: #2ab27b">Done</span>' : '<span style="color: tomato">In Process</span>';?>
            <li class="list-group-item list-group-item-success"><span><b>Status:</b></span> <?php echo $stauts ?></li>
            <li class="list-group-item list-group-item-warning"><span><b>Contributor:</b></span> {{$question->contributor}}</li>
        </ul>
        <hr />
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">
                <h1>Answer</h1>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-quora' aria-hidden='true'></i>Question Review</li>"
        );
    });
</script>