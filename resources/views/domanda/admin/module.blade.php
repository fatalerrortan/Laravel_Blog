<div class="row">
    <div class="col-md-offset-4">
        <h1><i class="fa fa-chevron-right" aria-hidden="true"></i>
            <b>Module</b>
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </h1>
    </div>
</div>
<div id="module_overview">
    <div class="row">
        <div class="col-md-offset-1">
            <h3><b>Installed Module</b></h3>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Installed_At</th>
                    <th>Module Name</th>
                    <th>Version</th>
                    <th>Update</th>
                    <th>Cancel</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="bg-success">04.04.2017</th>
                    <td>WordPress Template Integration</td>
                    <td>0.1.3</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">04.05.2017</th>
                    <td>Domanda Project Management API</td>
                    <td>1.1.3</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">04.06.2017</th>
                    <td>Domanda Live Chat Plugin</td>
                    <td>2.1.3</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">11.06.2017</th>
                    <td>Domanda VR Meeting Plugin</td>
                    <td>3.1.3</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6 well">
            <p><i class="fa fa-flag" aria-hidden="true"></i>
                <b>WordPress Template Integration</b> Update required! <a onclick="alert('In Development')"><i class="fa fa-bell" aria-hidden="true"></i>Update</a>
            </p>
        </div>
    </div>
</div>
<hr />
<div class="module_install">
<div class="row">
    <div class="col-md-offset-1">
        <h3><b>Installed Module</b></h3>
        <h5><a onclick="alert('In Development')"><b>Find more Plugin from Domanda Marketplace...</b></a></h5>
    </div>
</div>
<br />
<div class="row">
    <div class="col-md-offset-3 col-md-6">
    <div class="well">
    <form>
        <div class="form-group">
            <label for="questionInputFile">Install local Extension Package</label>
            <input type="file" class="form-control-file" id="questionInputFile" aria-describedby="fileHelp">
        </div>
        <button type="button" id="question_submit" class="btn btn-primary">Install</button>
    </form>
    </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-server' aria-hidden='true'></i>Project</li>"
        );
    });
    function removeRow(element) {
        $(element).parent().parent().toggle('slow');
    }
</script>