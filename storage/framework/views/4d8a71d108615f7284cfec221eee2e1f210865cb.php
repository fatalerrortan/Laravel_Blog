<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success"><h1><?php echo e($question->title); ?></h1></li>
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
            <li class="list-group-item list-group-item-success"><span><b>Keywords:</b></span> <?php echo e($question->keywords); ?></li>
            <li class="list-group-item list-group-item-info"><span><b>Created_At:</b></span> <?php echo e($question->created_at); ?></li>
            <li class="list-group-item list-group-item-danger"><span><b>Related Project:</b></span> <?php echo e($question->project); ?></li>
            <li class="list-group-item list-group-item-info"><span><b>Target:</b></span> <?php echo e($question->target); ?></li>
            <li class="list-group-item list-group-item-warning"><span><b>Duration:</b></span> <?php echo e($question->duration); ?> <span>Min.</span></li>
            <?php $access = $question->access ? 'limitless' : 'limited'; ?>
            <li class="list-group-item list-group-item-danger"><span><b>Access:</b></span> <?php echo $access ?></li>
            <?php $attachment = $question->file == null ? "No Attachment" : "<a href='".public_path('uploads/domanda/'.$question->file)."' download>".$question->file."</a>" ?>
            <li class="list-group-item list-group-item-info"><span><b>Attachment:</b></span> <?php echo $attachment ?></li>
            <?php
                switch ($question->status){
                    case 0:
                            $stauts = '<span style="color:#167AC6">Scanning</span>';
                            break;
                    case 1:
                            $stauts = '<span style="color: tomato">Processing</span>';
                            break;
                    case 2:
                            $stauts = '<span style="color: #2ab27b">Done</span>';
                            break;
            }
            ?>
            <li class="list-group-item list-group-item-success"><span><b>Status:</b></span> <?php echo $stauts ?></li>
            <li class="list-group-item list-group-item-warning"><span><b>Contributor:</b></span> <?php echo e($question->contributor); ?></li>
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