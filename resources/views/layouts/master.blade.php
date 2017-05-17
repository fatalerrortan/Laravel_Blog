<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$page}}">
    <meta name="author" content="xulin Tan, Xtan">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{asset('img/cmyk.png')}}">

    <title>{{$page}}</title>

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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter44225534 = new Ya.Metrika({
                        id:44225534,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true,
                        trackHash:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/44225534" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

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
                    <a href="https://{{$_SERVER['HTTP_HOST']}}/">Home</a>
                </li>
                <li>
                    <a class="dropdown-toggle social-icon" data-toggle="dropdown">PHP
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{secure_url('/posts/php')}}">All for PHP</a></li>
                        <li><a href="{{secure_url('/posts/php_magento')}}">Magento</a></li>
                        <li><a href="{{secure_url('/posts/php_laravel')}}">Laravel</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle social-icon" data-toggle="dropdown">Javascript
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{secure_url('/posts/javascript')}}">All for JS</a></li>
                        <li><a href="{{secure_url('/posts/javascript_jquery')}}">jQuery</a></li>
                        <li><a href="{{secure_url('/posts/javascript_react')}}">React</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle social-icon" data-toggle="dropdown">Others
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{secure_url('/posts/others_xtext')}}">Xtext</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle social-icon" data-toggle="dropdown">Tools
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{secure_url('/domanda')}}">Domanda</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{secure_url('/about')}}">About/CV</a>
                </li>
                <li id="new_post" style="display: none; background-color: #8eb4cb">
                    <a class="social-icon" style="color: #2ca02c">New Post</a>
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
                    <h1>Xulin Blog
                        <a id="newletter" class="social-icon">
                            <img class="img-responsive" src="{{asset("img/letter.png")}}" alt="newsletter" style="display: inline">
                            <span style="font-size: medium; color: whitesmoke">Subscribe Newsletter</span>
                        </a>
                    </h1>
                    <hr class="small">
                    <span class="subheading">Hi, I'm Xulin.I would like to share my experience of learning about programming</span>
                </div>
            </div>
        </div>
    </div>


</header>
<!-- Main Content Start -->
{{--<!-- Yandex.Metrika informer -->--}}
{{--<a href="https://metrika.yandex.com/stat/?id=44225534&amp;from=informer"--}}
   {{--target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/44225534/2_1_FFFFFFFF_EFEFEFFF_0_pageviews"--}}
                                       {{--style="width:80px; height:31px; border:0;" alt="Yandex.Metrica" title="Yandex.Metrica: data for today (page views)" class="ym-advanced-informer" data-cid="44225534" data-lang="en" /></a>--}}
{{--<!-- /Yandex.Metrika informer -->--}}
<div class="container">
    @yield('contents')
</div>
<!-- Main Content End -->

<!-- Footer -->
<hr>
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
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    jQuery("#newletter").on("click", function () {
        var email = prompt("Please type your email for Newsletter", "i want you@xulin.com");
        if (validateEmail(email)) {
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("email", email);
            jQuery.ajax({
                type: "POST",
                url: "/newsletter",
                dataType: "text",
                contentType: false,
                cache: false,
                processData: false,
                data: postData,
                success: function (html) {
                    alert("Thanks ;) i can't wait to get you some new stuffs");
                    }
                });
        }else {
            alert("You have entered an invalid email address!");
            return false;
        }
    });

    function validateEmail(email){
        {{--var whitespace = email.indexOf(' ');--}}
        {{--var checkAlt =  email.replace(/[^@]/g, "").length;--}}
        {{--var checkPoint =  email.replace(/[^.]/g, "").length;--}}
        {{--console.log(whitespace+" and "+checkAlt+" and "+checkPoint);--}}
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        console.log(re.test(email));
        return re.test(email);

    }

    jQuery(document).ready(function () {
        GitHubCalendar(".calendar", "fatalerrortan");
        var current_page = "{{$page}}";
        if (current_page == "admin") {
            jQuery("#new_post").show();
        }
    });
    jQuery("#search").keyup(function (e) {
        if(e.keyCode == 13){
            var query = jQuery(this).val();
            window.location = "https://{{$_SERVER['HTTP_HOST']}}/search/" + query;
        }
    });
</script>
@yield('extra_js')
</body>

</html>