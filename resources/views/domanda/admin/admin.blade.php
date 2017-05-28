<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Domanda Demo">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="">

    <title>Domanda Admin Center</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- bootstrap theme -->
    <link href="{{asset('domandas/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('domandas/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{asset('domandas/css/widgets.css')}}" rel="stylesheet">
    <link href="{{asset('domandas/css/style_dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('domandas/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('domandas/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
    {{--Chart css --}}
    <link href="{{asset('domandas/css/chartist.min.css')}}" rel="stylesheet">
</head>

<body>
<!-- container section start -->
<section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
        </div>

        <!--logo start-->
        <a href="http://www.xulin-tan.de/domanda" class="logo">
            <img class="img-responsive img-circle" width="70px" height="70px" src="{{asset('domandas/img/icons/domanda_icon.png')}}" style="display: inline" alt="">
            Domanda <span class="lite">Admin</span><span style="color: #A3FBD3"> Center</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-task-l"></i>
                        <span class="badge bg-important">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 6 pending projects</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Design PSD </div>
                                    <div class="percent">90%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Project 1
                                    </div>
                                    <div class="percent">30%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                        <span class="sr-only">30% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Digital Marketing</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Logo Designing</div>
                                    <div class="percent">78%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                        <span class="sr-only">78% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">50%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- task notificatoin end -->
                <!-- alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">3</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 3 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="icon_profile"></i></span>
                                You have got a new challenge
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon_pin"></i></span>
                                please complete your profile
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                Xulin accepted your answer <br />(Contribute Point +1)
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- alert notification end-->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li>
                    <a class="" href="#" id="returen_dashboard">
                        <i class="fa fa-laptop"></i>
                        <span>Admin</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Project</span>
                    </a>
                    <ul class="sub">
                        <li><a class="" onclick="getProjectView()">Intern</a></li>
                        <li><a class="" onclick="getProjectView()">Extern</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <span>Department</span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#">IT</a></li>
                        <li><a class="" href="#">Design</a></li>
                        <li><a class="" href="#">Marketing</a></li>
                        <li><a class="" href="#">Sales</a></li>
                        <li><a class="" href="#">HR</a></li>
                        <li><a class="" href="#">Innovation</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <span>Module</span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#">Installation/Update</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="fa fa-plug" aria-hidden="true"></i>
                        <span>API</span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#">Token Management</a></li>
                        <li><a class="" href="#">Communiacation</a></li>
                        <li><a class="" href="#">Access Control List</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <span>Configuration</span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#">Question/Answer</a></li>
                        <li><a class="" href="#">CMS</a></li>
                        <li><a class="" href="#">Documentation</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="https://www.xulin-tan.de/domanda">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Admin</h3>
                    <ol class="breadcrumb" id="dashboard_path">
                        <li><i class="fa fa-home"></i>Home</li>
                        <li><i class="fa fa-laptop"></i>Admin</li>
                    </ol>
                </div>
            </div>
            <div id="admin_content">
                {{--Contributor Point per month on--}}
            <div id="question_overview">
                <div class="row">
                    <div class="col-md-offset-3">
                        <h3><b>Sum of opened and solved Questions per month(Solved/Sum)</b></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="average_questions_per_month"></div>
                </div>
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 well">
                        <p><i class="fa fa-hourglass-half" aria-hidden="true"></i>
                            Current Month 107/120
                        </p>
                        <p>
                            <i class="fa fa-flag" aria-hidden="true"></i>
                            Current Solution Rate: 89,17%
                        </p>
                        <p>
                            <i class="fa fa-flag" aria-hidden="true"></i>
                            Up 18,89% from last month
                        </p>
                    </div>
                </div>
            </div>
        <hr />
                {{--Contributor Point per month off--}}

                {{--Project overview on--}}
            <div id="project_overview">
                <div class="row">
                    <div>
                        <h3><b>Project Overview</b></h3>
                    </div>
                </div>
                <br />
                <div class="row">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Manager</th>
                        <th>Solved/Opened</th>
                        <th>Most Frequent Topic</th>
                        <th>Best Contributor</th>
                        <th>Deadline</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><a onclick="getProjectView()">p101</a></th>
                        <td>Domanda Marketing</td>
                        <td>Adrian Andrä</td>
                        <td>30/37(81,08%)</td>
                        <td>#sales</td>
                        <td>Victoria König</td>
                        <td>09.12.2017</td>
                    </tr>
                    <tr class="bg-success">
                        <th scope="row"><a onclick="getProjectView(this)">p102</a></th>
                        <td>Domanda Sales</td>
                        <td>Victoria König</td>
                        <td>32/37(86,49%)</td>
                        <td>#erp</td>
                        <td>Ron Sem</td>
                        <td>09.09.2017</td>
                    </tr>
                    <tr>
                        <th scope="row"><a onclick="getProjectView(this)">p103</a></th>
                        <td>Domanda Design</td>
                        <td>Ron Sem</td>
                        <td>27/35(77,14%)</td>
                        <td>#Marketing</td>
                        <td>Adrian Andrä</td>
                        <td>09.11.2017</td>
                    </tr>
                    <tr class="bg-danger">
                        <th scope="row"><a onclick="getProjectView(this)">p104</a></th>
                        <td>Domanda Development</td>
                        <td>Xulin Tan</td>
                        <td>27/37(72,97%)</td>
                        <td>#design</td>
                        <td>Ron Sem</td>
                        <td>09.09.2018</td>
                    </tr>
                    </tbody>
                </table>
             </div>
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 well">
                        <p><i class="fa fa-flag" aria-hidden="true"></i>
                            Project <b>p104</b> needs more help!
                        </p>
                        <p><i class="fa fa-flag" aria-hidden="true"></i>
                            The best Contributor <b>Ron Sem</b> has not joined the project <b>p102</b>
                        </p>
                    </div>
                </div>
            </div>
        <hr />
                {{--Project overview off--}}
                {{--Department Overview on--}}
             <div id="department_overview">
                    <div class="row">
                        <div>
                            <h3><b>Department Overview</b></h3>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Department</th>
                                <th>Manager</th>
                                <th>Solved/Opened</th>
                                <th>Project with most unsolved Questions</th>
                                <th>Contribution of current Year</th>
                                <th>Most Frequent Topic</th>
                                <th>Best Contributor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Marketing</th>
                                <td>Adrian Andrä</td>
                                <td>30/37(81,08%)</td>
                                <td>p201(13)</td>
                                <td>201</td>
                                <td>#sales</td>
                                <td>Leonardo DiCaprio</td>
                            </tr>
                            <tr>
                                <th scope="row">Sales</th>
                                <td>Victoria König</td>
                                <td>32/37(86,49%)</td>
                                <td>p202(11)</td>
                                <td>202</td>
                                <td>#Marketing</td>
                                <td>Nicolas Cage</td>
                            </tr>
                            <tr>
                                <th scope="row">Design</th>
                                <td>Ron Sem</td>
                                <td>27/35(77,14%)</td>
                                <td>p203(10)</td>
                                <td>199</td>
                                <td>#IT</td>
                                <td>Steve Jobs</td>
                            </tr>
                            <tr class="bg-danger">
                                <th scope="row">IT</th>
                                <td>Xulin Tan</td>
                                <td>27/37(72,97%)</td>
                                <td>p204(15)</td>
                                <td>203</td>
                                <td>#Design</td>
                                <td>Andy Warhol</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6 well">
                            <p><i class="fa fa-flag" aria-hidden="true"></i>
                                Department <b>IT</b> needs more help from <b>#Design</b>
                            </p>
                        </div>
                    </div>
                </div>
        <hr />
                {{--Department Overview off--}}
    </div>

        </section>

        <div class="text-right"><div class="credits"></div></div>
    </section>
    <!--main content end-->
</section>
<input type="hidden" id="user_id" value="">

<!-- javascripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('domandas/js/jquery-ui-1.10.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
{{--chart js--}}
<script src="{{asset('domandas/js/chartist.min.js')}}"></script>
<script src="{{asset('domandas/js/textarea.js')}}"></script>
{{--<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>--}}
<!-- nice scroll -->
<script src="{{asset('domandas/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('domandas/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--custome script for all page-->
<script src="{{asset('domandas/js/scripts.js')}}"></script>
{{--Sum of opened and solved Questions per month on--}}
<script>
    new Chartist.Bar('#average_questions_per_month', {
        labels: ['Jan.(99/132)', 'Feb.(83/94)', 'Mar.(103/116)', 'Apr.(81/91)',
            'May(96/128)', 'Jun.(107/120)'],
        series: [
            [99, 83, 103, 81, 96, 107],
            [33, 11, 13, 10, 32, 13]
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
{{--Sum of opened and solved Questions per month off--}}
<script>
    function getProjectView() {
        var postData = new FormData();
        contentChange('POST', '/domanda/admin/project', postData, true);
    }
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    function contentChange(method, urlPattern, postData, contentUpdate) {
        postData.append("_token", CSRF_TOKEN);
        $.ajax({
            type:method,
            url:urlPattern,
            dataType:"text",
            contentType:false,
            cache:false,
            processData:false,
            data:postData,
            success:function(html){
                if(contentUpdate){
                    $("#admin_content").html(html);
                }else{
                    location.reload();
                }

            }
        });
    }
</script>
</body>
</html>
