<div class="row">
    <div class="col-md-offset-4">
        <h1><i class="fa fa-chevron-right" aria-hidden="true"></i>
            <b>Project p104</b>
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </h1>
    </div>
</div>
<div id="theme_distribution_overview">
    <div class="row">
        <div class="col-md-12">
            <h3><b>Distribution of Most Frequent Question Themes And Solution Related Report(Solved/Sum)</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" id="theme_distribution"></div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6 well">
            <p>
                <i class="fa fa-flag" aria-hidden="true"></i>
                <b>Project p104</b> need more help from <b>#erp</b>!(Most opened Questions)
            </p>
        </div>
        <div class="col-md-offset-3">
            <button type="button" onclick="alert('In Development')" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Excel Export</button>
        </div>
    </div>

</div>
<hr />
<div id="theme_and_department_distribution">
        <div class="row">
            <div class="col-md-offset-1 col-md-5">
                <h3><b>Frequent Question Themes(%)</b></h3>
            </div>
            <div class="col-md-offset-1 col-md-5">
                <h3><b>Contribution Related Departments(%)</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" id="theme_distribution_more"></div>
            <div class="col-md-6" id="department_distribution_more"></div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6 well">
                <p>
                    <i class="fa fa-flag" aria-hidden="true"></i>
                    <b>Project p104</b> involves most frequently with theme <b>Marketing</b>
                </p>
                <p>
                    <i class="fa fa-flag" aria-hidden="true"></i>
                    <b>Project p104</b> got most help from <b>Innovation</b> Department
                </p>
            </div>
            <div class="col-md-offset-3">
                <button type="button" onclick="alert('In Development')" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Excel Export</button>
            </div>
        </div>
</div>
<hr />

<div id="unsolved_question">
        <div class="row">
            <div class="col-md-offset-4">
                <h3><b>Unresolved Question Within A Week</b></h3>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Created_At</th>
                    <th>Title</th>
                    <th>Owner</th>
                    <th>Target</th>
                    <th>Keywords</th>
                    <th>Push</th>
                    <th>Cancel</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">111</th>
                    <td>05.06.2017</td>
                    <td>How to complete a real Innovation?</td>
                    <td>Xulin Tan</td>
                    <td>#Innovation</td>
                    <td>#Innovation, #Test, #Chrome</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">222</th>
                    <td>06.06.2017</td>
                    <td>How to complete a real Marketing?</td>
                    <td>Adrian Andrä</td>
                    <td>#Marketing</td>
                    <td>#Marketing, #OnlineShop, #Payment</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">333</th>
                    <td>07.06.2017</td>
                    <td>How to complete a real After-Sales?</td>
                    <td>Ron Sem</td>
                    <td>#Sales</td>
                    <td>#Sales, #Consulting, #Gurantee</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">111</th>
                    <td>08.06.2017</td>
                    <td>How to complete a real Design?</td>
                    <td>Victoria König</td>
                    <td>#Design</td>
                    <td>#Desing, #Photoshop, #Template</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeRow(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
            </table>
                <div class="col-md-offset-3">
                    <button type="button" onclick="alert('In Development')" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Excel Export</button>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-users' aria-hidden='true'></i>Project</li>"
        );
    });
    function removeRow(element) {
        $(element).parent().parent().toggle('slow');
    }
</script>
{{--Theme distribution on--}}
<script>
    new Chartist.Bar('#theme_distribution', {
        labels: ['#IT(11/14)(78,57%)', '#Design(7/9)(77,78%)', '#Marketing(15/19)(78,95%)', '#Sales(5/6)(83,33%)',
            '#erp(13/18)(72,22%)', '#photoshop(9/12)(75%)'],
        series: [
            [11, 7, 15, 5, 13, 9],
            [3, 2, 4, 1, 5, 3]
        ]
    }, {
        height: 300,
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return value;
            }
        }
    }).on('draw', function(data) {
        if(data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 30px'
            });
        }
    });
</script>
{{--theme distribution off--}}
{{--js for question and answer related charts on--}}
<script>
    var data_theme = {
        labels: ['#Design(11,54%)', '#IT(17,95%)', '#Marketing(24,36%%)', '#Sales(7,69%)', '#erp(23,08%)', '#Photoshop(15,38%)'],
        series: [11, 17, 24, 8,23,15]
    };

    var data_department = {
        labels: ['#Design(14,54%)', '#IT(20,95%)', '#Marketing(15,36%%)', '#Sales(13,69%)', '#HR(5,08%)', '#Innovation(33,38%)'],
        series: [14, 20, 15,13,5,33]
    };

    var options = {
        labelInterpolationFnc: function(value) {
            return value[0]
        }
    };

    var responsiveOptions = [
        ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function(value) {
                return value;
            }
        }],
        ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20,
            height: 290
        }]
    ];
    new Chartist.Pie('#theme_distribution_more', data_theme, options, responsiveOptions);
    new Chartist.Pie('#department_distribution_more', data_department, options, responsiveOptions);
</script>
{{--js for question and answer related charts off--}}
