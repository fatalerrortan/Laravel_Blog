<div class="row">
    <div class="col-md-offset-4">
        <h1><i class="fa fa-chevron-right" aria-hidden="true"></i>
            <b>API Administration</b>
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </h1>
    </div>
</div>
<div id="token_generation">
    <div class="row">
        <div class="col-md-offset-1">
            <h3><b>Token Generation and Assignment</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>APP</th>
                <th>Generated_At</th>
                <th>Token</th>
                <th>Update</th>
                <th>Cancel</th>
            </tr>
            </thead>
            <tbody id="token_table">
            <tr>
                <th scope="row">Domanda Project Management</th>
                <td>04.04.2017</td>
                <td>123qwe456qwe798asd</td>
                <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <th scope="row">Domanda ERP</th>
                <td>05.05.2017</td>
                <td>789qwe456qwe123asd</td>
                <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <th scope="row">Domanda WIKI</th>
                <td>06.06.2017</td>
                <td>werqwe456qwe123asd</td>
                <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-6">
            <div class="well">
                <form>
                    <div class="form-group">
                        <label for="project">Token Register</label>
                        <input type="text" class="form-control" id="token_input" placeholder="plz register your APP here for Token Assignment">
                    </div>
                    <button type="button" id="api_generate" class="btn btn-primary">Generate</button>
                </form>
            </div>
        </div>
    </div>
</div>
<hr />
<div id="api_call">
    <div class="row">
        <div class="col-md-offset-1">
            <h3><b>Enabled APIs</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>APP</th>
                    <th>Enabled_At</th>
                    <th>Token</th>
                    <th>Update</th>
                    <th>Cancel</th>
                </tr>
                </thead>
                <tbody id="enabled_table">
                <tr>
                    <th scope="row">Domanda Project Management</th>
                    <td>04.04.2017</td>
                    <td>123qwe456qwe798asd</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1">
            <h3><b>Enable API Usage</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
        <form>
            <div class="form-group">
                <label for="custom_apps">APPs</label>
                <select multiple class="form-control" id="custom_apps">
                    <option value="Oepn Source 1">Oepn Source 1</option>
                    <option value="Domanda Project Management">Domanda Project Management</option>
                    <option value="Domanda Wiki">Domanda Wiki</option>
                    <option value="Open Source 2">Open Source 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="project">Token From Chosen API</label>
                <input type="text" class="form-control" id="custom_token" placeholder="plz enter your Chosen API Token here">
            </div>
            <button type="button" id="api_enable" class="btn btn-primary">Enable</button>
        </form>
        </div>
    </div>
</div>
<hr />
<div id="access">
    <div class="row">
        <div class="col-md-offset-1">
            <h3><b>Access Control List</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Sector</th>
                    <th>Status</th>
                    <th>Active</th>
                    <th>Inactive</th>
                </tr>
                </thead>
                <tbody id="enabled_table">
                <tr>
                    <th scope="row">IT</th>
                    <td class="status">active</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="inactive(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">HR</th>
                    <td class="status">active</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="inactive(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">Marketing</th>
                    <td class="status">active</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="inactive(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">Sales</th>
                    <td class="status">active</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="inactive(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">Innovation</th>
                    <td class="status">active</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="inactive(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function inactive(element) {
        $(element).parent().parent().find("td.status").html("<span style='color: red'>inactive</span>");
    }
    function removeRow(element) {
        $(element).parent().parent().toggle('slow');
    }
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-plug' aria-hidden='true'></i>API</li>"
        );
    });
    $("#api_generate").click(function () {
        var app = $("#token_input").val();
        var token_html = "<tr style='display: none' id='new_token'>"+
                            "<th scope='row'>"+app+"</th>"+
                            "<td>12.06.2017</td>"+
                            "<td>vbgqwe456qwe123456</td>"+
                            "<td><a><i class='fa fa-rocket' aria-hidden='true'></i></a></td>"+
                            "<td><a><i class='fa fa-ban' aria-hidden='true'></i></a></td>"+
                            "</tr>";
        $("#token_table").append(token_html);
        $("#new_token").toggle('slow');
    });
    $("#api_enable").click(function () {
        var app = $("#custom_apps").val();
        var token = $("#custom_token").val();
        var token_html = "<tr style='display: none' id='new_api'>"+
                "<th scope='row'>"+app+"</th>"+
                "<td>12.06.2017</td>"+
                "<td>"+token+"</td>"+
                "<td><a><i class='fa fa-rocket' aria-hidden='true'></i></a></td>"+
                "<td><a><i class='fa fa-ban' aria-hidden='true'></i></a></td>"+
                "</tr>";
        $("#enabled_table").append(token_html);
        $("#new_api").toggle('slow');
    });

</script>