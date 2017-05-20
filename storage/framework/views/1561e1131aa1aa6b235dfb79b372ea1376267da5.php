<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h3><b>Get Help From Your Colleague</b></h3>
        <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
            
        </div>
        <div class="form-group">
            <label for="keywords">Keywords</label>
            <input type="text" class="form-control" id="keywords" placeholder="plz add hash tag to each keyword like #marketing,#design,#laravel">
        </div>
        <div class="form-group">
             <label for="project">Related Project</label>
             <input type="text" class="form-control" id="project" placeholder="plz enter your project id  if necessary">
        </div>
        <div class="form-group">
            <label for="target">Target Expert</label>
            <select class="form-control" id="target">
                <option value="IT">IT</option>
                <option value="Design">Design</option>
                <option value="Marketing">Marketing</option>
                <option value="HR">HR</option>
                <option value="Innovation">Innovation</option>
            </select>
        </div>
        <div class="form-group">
            <label for="duration">Answer Duration For Each Challenger</label>
            <select multiple class="form-control" id="duration">
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
            <textarea class="form-control" id="questionTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="questionInputFile">Attachment</label>
            <input type="file" class="form-control-file" id="questionInputFile" aria-describedby="fileHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-question-circle-o' aria-hidden='true'></i>Ask Question</li>"
        );
    });
</script>