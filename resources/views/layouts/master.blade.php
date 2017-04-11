<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>XTan Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>
    @yield("extra_css")
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
                <a href="https://github.com/fatalerrortan" class="navbar-brand social-icon"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
                <a href="http://weibo.com/fatalerrorxtan" class="navbar-brand social-icon"><i class="fa fa-weibo fa-lg" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/xulintan" class="navbar-brand social-icon"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="http://{{$_SERVER['HTTP_HOST']}}/blog/public">Home</a>
                </li>
                <li>
                    <a class="dropdown-toggle social-icon" data-toggle="dropdown">PHP
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/blog/public/posts/php">All for PHP</a></li>
                        <li><a href="/blog/public/posts/php_magento">Magento</a></li>
                        <li><a href="/blog/public/posts/php_laravel">php_laravel</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle social-icon" data-toggle="dropdown">Javascript
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/blog/public/posts/javascript">All for JS</a></li>
                        <li><a href="/blog/public/posts/jquery">jQuery</a></li>
                        <li><a href="/blog/public/posts/react">React</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/blog/public/about">About/CV</a>
                </li>
                <li>
                    <a class="dropdown-toggle social-icon" data-toggle="dropdown">Search
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li style="width: 500px">
                            <div class="input-group">
                                <input type="text" id="search" class="form-control" placeholder="press ENTER to search" style="width: 500px">
                            </div><!-- /input-group -->
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{asset('img/dudu.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Xulin Blog</h1>
                    <hr class="small">
                    <span class="subheading">Hi, I'm Xulin.I would like to share my experience of learning about programming</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content Start -->
<div class="container">
    @yield('contents')
</div>
<!-- Main Content End -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="calendar"></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="https://github.com/fatalerrortan">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="http://weibo.com/fatalerrorxtan">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-weibo fa-lg" aria-hidden="true"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/xulintan">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Xulin Website 2017</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Contact Form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>
<script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>

<!-- Theme JavaScript -->
<script src="{{asset('js/clean-blog.min.js')}}"></script>
{{--for search action--}}
<script>
    jQuery(document).ready(function () {
        GitHubCalendar(".calendar", "fatalerrortan");
    });
    jQuery("#search").keyup(function (e) {
        if(e.keyCode == 13){
            var query = jQuery(this).val();
            window.location = "http://{{$_SERVER['HTTP_HOST']}}/blog/public/search/" + query;
        }
    });
</script>

@yield('extra_js')
</body>

</html>