<div class="row">
    <div class="col-md-offset-4">
        <h1><i class="fa fa-chevron-right" aria-hidden="true"></i>
            <b>IT Department</b>
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </h1>
    </div>
</div>
<div id="member_list">
        <div class="row">
            <div class="col-md-offset-4">
                <h3><b>Member List IT Department</b></h3>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Skills</th>
                        <th>Expert(Solution Rate%)</th>
                        <th>Current Project</th>
                        <th>CP of Current Month</th>
                        <th>Sum of CP</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">101</th>
                        <td>Linus Torvalds</td>
                        <td>Linux Server Administrator</td>
                        <td>#Linux,#Debian, #Hardware</td>
                        <td>#Linux(91%)</td>
                        <td>p311</td>
                        <td>13</td>
                        <td>46</td>
                    </tr>
                    <tr>
                        <th scope="row">102</th>
                        <td>Steve Jobs</td>
                        <td>Senior Ios Engineer</td>
                        <td>#Object-C,#Swift, #C++</td>
                        <td>#Object-C(91%)</td>
                        <td>p312</td>
                        <td>17</td>
                        <td>56</td>
                    </tr>
                    <tr>
                        <th scope="row">103</th>
                        <td>Bill Gates</td>
                        <td>Senior .Net Engineer </td>
                        <td>#C Sharp,#C++, #VB.NET</td>
                        <td>#Python(86%)</td>
                        <td>p313</td>
                        <td>10</td>
                        <td>53</td>
                    </tr>
                    <tr>
                        <th scope="row">104</th>
                        <td>Mark Zuckerberg</td>
                        <td>Senior Web Engineer</td>
                        <td>#React, #Php, #ReactNative</td>
                        <td>#React(77%)</td>
                        <td>p202</td>
                        <td>9</td>
                        <td>50</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6 well">
            <p>
                <i class="fa fa-flag" aria-hidden="true"></i>
                <b>Bill Gates(103)</b> has made most Contributions in <b>Python</b>!
                We recommend him to add <b>python</b> into his skills list.
                <a onclick="alert('In Development')"><i class="fa fa-bell" aria-hidden="true"></i><b>Bill Gates(103)</b> Notification</a>
            </p>
        </div>
        <div class="col-md-offset-3">
            <button onclick="alert('In Development')" type="button" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Excel Export</button>
        </div>
    </div>
</div>
<hr />
<div id="department_performance">
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
                <b>IT Department</b> need more help from <b>#VR</b>!(Most opened Questions)!
                <a onclick="alert('In Development')"><i class="fa fa-bell" aria-hidden="true"></i>HR Notification</a>
            </p>
        </div>
        <div class="col-md-offset-3">
            <button onclick="alert('In Development')" type="button" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Excel Export</button>
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
                    <th>Keywords</th>
                    <th>Push</th>
                    <th>Cancel</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">111</th>
                    <td>05.06.2017</td>
                    <td>How to use via browser?</td>
                    <td>Gabe Newell</td>
                    <td>#VR, #Browser, #Chrome</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeQuestion(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">222</th>
                    <td>06.06.2017</td>
                    <td>Why my erp's graphical interface crashed!!!</td>
                    <td>Jensen Huang</td>
                    <td>#erp, #graph</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeQuestion(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">333</th>
                    <td>07.06.2017</td>
                    <td>I can't install skype web plugin!</td>
                    <td>Sundar Pichai</td>
                    <td>#skype, #network, #browser</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeQuestion(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">111</th>
                    <td>08.06.2017</td>
                    <td>My VR device exploded when charging!</td>
                    <td>Xulin Tan</td>
                    <td>#VR, #Hardware</td>
                    <td><a><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td><a onclick="removeQuestion(this)"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
            </table>
            <div class="col-md-offset-3">
                <button onclick="alert('In Development')" type="button" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Excel Export</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
                "<li class='tmp_path'><i class='fa fa-info' aria-hidden='true'></i>IT Department</li>"
        );
    });
    function removeQuestion(element) {
        $(element).parent().parent().toggle('slow');
    }
</script>
{{--Theme distribution on--}}
<script>
    new Chartist.Bar('#theme_distribution', {
        labels: ['#SAP(11/14)(78,57%)', '#MacOs(7/9)(77,78%)', '#Windows(15/19)(78,95%)', '#Network(5/6)(83,33%)',
            '#VR(13/18)(72,22%)', '#Photoshop(9/12)(75%)'],
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