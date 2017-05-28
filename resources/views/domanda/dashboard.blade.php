<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Domanda Demo">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="">
    <link rel="icon" type="image/png" href="{{asset('domandas/img/link_log.png')}}">

    <title>Domanda Dashboard</title>

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
            Domanda <span class="lite">Dashboard</span></a>
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
                <!-- inbox notificatoin start-->
                <li id="mail_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-l"></i>
                        <span class="badge bg-important">3</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 3 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo">
                                    <img class="img-responsive img-circle" width="70px" height="70px" src="{{asset('domandas/img/pp1.png')}}" alt="">
                                </span>
                                <span class="subject">
                                    <span class="from">Donald Trump</span>
                                    <span class="time">1 min</span>
                                    </span>
                                <span class="">
                                        Your answer is so helpful :)
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo">
                                    <img class="img-responsive img-circle" width="70px" height="70px" src="{{asset('domandas/img/pp2.png')}}" alt="">
                                </span>
                                <span class="subject">
                                    <span class="from">Angela Merkel</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                <span class="">
                                     Great Job Bro! You saved really<br /> my time <3
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo">
                                    <img class="img-responsive img-circle" width="70px" height="70px" src="{{asset('domandas/img/pp3.png')}}" alt="">
                                </span>
                                <span class="subject">
                                    <span class="from">Domanda Godzilla</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                <span class="">
                                        your answer is awesome !!!
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox notificatoin end -->
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
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img class="img-responsive" width="50px" height="50px" src="data:image/jpeg;base64,{{base64_encode($user->image)}}" alt="">
                            </span>
                        <span class="username">{{$user->firstname}} {{$user->lastname}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout" id="right_top_menus">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top" >
                            <a id="profile_trigger"><i class="fa fa-user" aria-hidden="true"></i></i> My Profile</a>
                        </li>
                        <li>
                            <a><i class="fa fa-cog" aria-hidden="true"></i> Configuration</a>
                        </li>
                        <li>
                            <a><i class="fa fa-file-text" aria-hidden="true"></i> Documentation</a>
                        </li>
                        <li>
                            <a class="" href="https://www.xulin-tan.de/domanda"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
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
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="" id="question" href="#">
                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                        <span>Ask Questions</span>
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                        <span>Message</span>
                    </a>
                </li>
                <li>
                    <a class="" href="#" id="usage">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                        <span>Usage</span>
                    </a>
                </li>
                {{--<li class="sub-menu">--}}
                    {{--<a href="javascript:;" class="">--}}
                        {{--<i class="fa fa-question-circle-o" aria-hidden="true"></i>--}}
                        {{--<span>Question</span>--}}
                        {{--<span class="menu-arrow arrow_carrot-right"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub">--}}
                        {{--<li><a class="" href="form_component.html">Form Elements</a></li>--}}
                        {{--<li><a class="" href="form_validation.html">Form Validation</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <span>Configuration</span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#">Question</a></li>
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
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb" id="dashboard_path">
                        <li><i class="fa fa-home"></i>Home</li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>
            <div id="dashboard_content">
                 {{--My Questions--}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tag_trigger">Workspace</label>
                            <select class="form-control" id="tag_trigger">
                                <option value="myquestions">My Questions</option>
                                <option value="mychallenges">My Challenges</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a id="answer_redirect" style="display: none">
                            <h3>
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                Domanda Hero :) someone(<span class="answer_count" style="color: #880000"></span>) needs your help
                            </h3>
                        </a>
                        <a id="accept_redirect" style="display: none">
                            <h3>
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                You have got (<span class="accept_count" style="color: #880000"></span>) answer from your colleague
                            </h3>
                        </a>
                        <a id="wiki_redirect" style="display: none">
                            <h3>
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                You have got (<span class="wiki_count" style="color: #880000"></span>) approval from your colleague
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="row" id="myquestions" style="display: none;">
                    <div class="col-md-12">
                        <h1>My Questions</h1>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Created_at</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Target</th>
                                <th>Duration</th>
                                <th>Access</th>
                                <th>Project</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Contributor</th>
                            </tr>
                            </thead>
                            <tbody id="question_table">
                            <?php

                            foreach ($questions as $question){
                                echo '<tr>';
                                    echo '<td>'.$question->created_at.'</td>';
                                    echo '<td><a href="#" onclick="question_review('.$question->id.')">'.$question->title.'</a></td>';
                                    echo '<td>'.$question->keywords.'</td>';
                                    echo '<td>'.$question->target.'</td>';
                                    echo '<td>'.$question->duration.' Min.</td>';
                                    $access = $question->access ? 'limitless' : 'limited';
                                    echo '<td>'.$access.'</td>';
                                    echo '<td>'.$question->project.'</td>';
                                    $file = $question->file === null ? 'No' : 'Yes';
                                    echo '<td>'.$file.'</td>';
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
                                            $status = '<span class="evaluating" style="color: #F48024">Evaluating</span>';
                                            break;
                                        default:
                                            $status = '<span style="color:#167AC6">Scanning</span>';
                                            break;
                                    }
                                    echo '<td>'.$status.'</td>';
                                    echo '<td>'.$question->contributor.'</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--To Answer--}}
                <div class="row" id="mychallenges" style="display: none;">
                    <div class="col-md-12">
                        <h1>My Challenges(<span class="answer_count" style="color: #880000"></span>)</h1>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Created_at</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Duration</th>
                                <th>Project</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Solve It</th>
                                <th>Hand Over</th>
                            </tr>
                            </thead>
                            <tbody id="answer_table">
                            <?php
                            foreach ($toAnswers as $toAnswer){
                                echo '<tr>';
                                echo '<td>'.$toAnswer->created_at.'</td>';
                                echo '<td><a href="#" onclick="question_review('.$toAnswer->id.')">'.$toAnswer->title.'</a></td>';
                                echo '<td>'.$toAnswer->keywords.'</td>';
                                echo '<td>'.$toAnswer->duration.' Min.</td>';
                                echo '<td>'.$toAnswer->project.'</td>';
                                $file = $toAnswer->file === null ? 'No' : 'Yes';
                                echo '<td>'.$file.'</td>';
                                switch ($toAnswer->status){
                                    case 0:
                                        $status = '<span class="scanning" style="color:#167AC6">Scanning</span>';
                                        break;
                                    case 1:
                                        $status = '<span style="color: tomato">Processing</span>';
                                        break;
                                    case 2:
                                        $status = '<span class="wiki" style="color: #2ab27b">Done</span>';
                                        break;
                                    case 4:
                                        $status = '<span style="color: #F48024">Evaluating</span>';
                                        break;
                                    default:
                                        $status = '<span class="scanning" style="color:#167AC6">Scanning</span>';
                                        break;
                                }
                                echo '<td status="'.$toAnswer->status.'" class="status">'.$status.'</td>';
                                echo '<td class="solveIt"><a onclick="solveIt('.$toAnswer->id.')" ><i class="fa fa-wrench" aria-hidden="true"></i></a></td>';
                                echo '<td class="handOver"><a onclick="handOver('.$toAnswer->id.')"><i class="fa fa-handshake-o" aria-hidden="true"></i></a></td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-right">
            <div class="credits">
                <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
            </div>
        </div>
    </section>
    <!--main content end-->
</section>
<input type="hidden" id="user_id" value="{{$user->id}}">

<!-- javascripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('domandas/js/jquery-ui-1.10.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('domandas/js/textarea.js')}}"></script>
{{--<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>--}}
<!-- nice scroll -->
<script src="{{asset('domandas/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('domandas/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--custome script for all page-->
<script src="{{asset('domandas/js/scripts.js')}}"></script>
<script>
    var dashboard_tag = {active_tag: "myquestions"}
    $(document).ready(function () {
        $("#"+dashboard_tag.active_tag).toggle("slow");
        $("#answer_table tr").each(function () {
            var status = parseInt($(this).find("td.status").attr('status'));
            if(status != 0){
                $(this).find("td.solveIt, td.handOver").hide();
            }
        });
        var answer_signal = $("#answer_table span.scanning").length;
        if(answer_signal > 0){
//            console.log('to Answer '+answer_signal);
            $("span.answer_count").html(answer_signal);
            $("#answer_redirect").toggle('slow');
        }
        var accept_signal = $("#question_table span.evaluating").length;
        if(accept_signal > 0){
            $("span.accept_count").html(accept_signal);
            $("#accept_redirect").toggle('slow');
        }
        var wiki_signal = $("#answer_table span.wiki").length;
        if(wiki_signal > 0){
//            console.log('to wiki '+wiki_signal);
            $("span.wiki_count").html(wiki_signal);
            $("#wiki_redirect").toggle('slow');
        }
    });
    function solveIt(question_id) {
        var postData = new FormData();
        postData.append('question_id', question_id);
        contentChange('POST', '/domanda/question/solveit', postData, false);
        location.reload();
    }
    function handOver(question_id) {
        var postData = new FormData();
        postData.append('question_id', question_id);
        contentChange('POST', '/domanda/question/handover', postData, false);
        location.reload();
    }
    $("#tag_trigger").change(function () {
        var target_tag = $(this).val();
        var tag_to_close = dashboard_tag.active_tag;
        $("#"+tag_to_close).hide();
        dashboard_tag.active_tag = target_tag;
        $("#"+target_tag).toggle('slow');
    });
    $("#answer_redirect, #wiki_redirect").click(function () {
        $("#myquestions").hide();
        $("#mychallenges").toggle('slow');
        dashboard_tag.active_tag = 'mychallenges';
        $("#tag_trigger").val('mychallenges');
    });
    $("#accept_redirect").click(function () {
        $("#mychallenges").hide();
        $("#myquestions").show();
        dashboard_tag.active_tag = 'myquestions';
        $("#tag_trigger").val('myquestions');
    });
//    jQuery("#tag_button a").mouseover(function () {
//        jQuery(this).effect( "bounce", { times: 3}, "slow");
//    });
    $("#returen_dashboard").click(function () {
        location.reload();
    });
    $("#profile_trigger, #usage").click(function () {
        var postData = new FormData();
        postData.append('user_id','{{$user->id}}');
        contentChange('POST', '/domanda/profile', postData, true);
    });
    $("#question").click(function () {
        var postData = new FormData();
        postData.append('user_id','{{$user->id}}');
        contentChange('POST', '/domanda/question', postData, true);
    });
    function question_review(question_id) {
        var postData = new FormData();
        postData.append('question_id', question_id);
        contentChange('POST', '/domanda/question/review', postData, true);
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
                    $("#dashboard_content").html(html);
                }else{
                    location.reload();
                }

            }
        });
    }
</script>
</body>
</html>
