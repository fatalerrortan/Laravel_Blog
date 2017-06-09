<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{asset('domandas/img/link_log.png')}}">

    <title>Domanda</title>

    <!-- css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('domandas/css/nivo-lightbox.css')}}" rel="stylesheet" />
    <link href="{{asset('domandas/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('domandas/css/animations.css')}}" rel="stylesheet" />
    <link href="{{asset('domandas/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('domandas/color/default.css')}}" rel="stylesheet">
    <link href="{{asset('domandas/css/loginmodal.css')}}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<section class="hero" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right navicon">
                <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-md-offset-6 text-center inner">
                <div class="animatedParent">
                    <h1 class="animated fadeInDown">INNOVATION</h1>
                    <p class="animated fadeInUp">a successful <b>Troubleshooting</b> starts here</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-4 text-center">
                <a href="#about" class="learn-more-btn btn-scroll">Learn more</a>
            </div>
        </div>
    </div>
</section>


<!-- Navigation -->
<div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="site-logo">
                        <a href="index.html" class="brand">
                            <img class="img-responsive img-circle" width="100px" height="100px" src="{{asset('domandas/img/icons/domanda_icon.png')}}" style="display: inline" alt="">
                            DOMANDA</a>
                    </div>
                </div>


                <div class="col-md-8">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active" id="login_trigger"><a href="#about">Login</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#works">Works</a></li>

                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.Navbar-collapse -->

                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
</div>
<!-- /Navigation -->

<!-- BEGIN # MODAL LOGIN -->
<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img class="img-circle" id="img_logo" src="{{asset('domandas/img/icons/domanda_small_logo.png')}}">
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" method="post" action="{{secure_url('/domanda/dashboard')}}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <span id="text-login-msg">Type your username and password.</span>
                        </div>
                        <input id="login_username" name="login_username" class="form-control" type="text" placeholder="Username" required>
                        <input id="login_password" name="login_password" class="form-control" type="password" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" id="form_login_button" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End # Login Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Type your e-mail.</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                        <div>
                            <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End | Lost Password Form -->

                <!-- Begin | Register Form -->
                <form id="register-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-register-msg">
                            <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-register-msg">Register an account.</span>
                        </div>
                        <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                        <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                        <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>
                        <div>
                            <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                        </div>
                    </div>
                </form>
                <!-- End | Register Form -->

            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->

<!-- Section: about -->
<section id="about" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="animatedParent">
                    <div class="section-heading text-center animated bounceInDown">
                        <h2 class="h-bold">About DOMANDA</h2>
                        <div class="divider-header"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">


        <div class="row">


            <div class="col-lg-8 col-lg-offset-2 animatedParent">
                <div class="text-center">
                    <p>
                        <b>Domanda</b> supports a <b>direct and efficient way</b> to solve issues. Long searching for the right contact and long interruptions of the actual activity are a thing of the past.
                        This tool will help you to <b>clarify such problems within a few minutes</b> and send your Question to the <b>perfect specialist</b>. And all from your WORKSPACE!
                        You can devote yourself your current activities and will be notified as soon as the question has been resolved.                    </p>
                    <p>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-circle" id="img_logo" width="70px" height="70px" src="{{asset('domandas/img/batman.png')}}">
                            <br>“Sometimes it s very difficult to find the right person for a specific question…”
                            Mr. Batman (PHP Developer)</div>
                        <div class="col-md-4">
                            <img class="img-circle" id="img_logo" width="70px" height="70px" src="{{asset('domandas/img/deadpool.png')}}">
                            <br>“Clarify an issue can take a long time, sometimes 1 or 2 h…”
                            Mr. Deadpool (Marketing Assistant)</div>
                        <div class="col-md-4">
                            <img class="img-circle" id="img_logo" width="70px" height="70px"width="100px" height="100px" src="{{asset('domandas/img/spiderman.png')}}">
                            <br>“Usually problem areas are not identified.” Mr. Spiderman (Senior Designer)</div>
                    </div>

                    <a href="#service" class="btn btn-skin btn-scroll">Get Started</a>
                </div>
            </div>


        </div>
    </div>

</section>
<!-- /Section: about -->


<!-- Section: services -->
<section id="service" class="home-section color-dark bg-gray">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div>
                    <div class="section-heading text-center">
                        <h2 class="h-bold">What DOMANDA can do for you</h2>
                        <div class="divider-header"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center">
        <div class="container">

            <div class="row animatedParent">
                <div class="col-md-4">
                    <div class="animated rotateInDownLeft">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-users fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Intelligent Questions Assignment</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Exact One Expert Location<br />
                                    Switch To Next Expert By Busy<br />
                                    Continuous Search Until Your Approval
                                </p>
                                <a href="#works" class="btn btn-skin">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="animated rotateInDownLeft slow">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-plug fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Multiple Tools Integration</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Domanda Plugin Marketplace<br />
                                    APPs Workflow Without Boundary<br />
                                    Security Mechanism Via Access Control List and Token Authentication
                                </p>
                                <a href="#works" class="btn btn-skin">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="animated rotateInDownLeft slower">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-line-chart fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Comprehensive Questions Related Analyses</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Identifying Problem Areas and Competences<br />
                                    Tracking Project Progress<br />
                                    Mining Business Innovation Potentials
                                </p>
                                <a href="#works" class="btn btn-skin">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Section: services -->


<!-- Section: works -->
<section id="works" class="home-section color-dark text-center bg-white">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div>
                    <div class="animatedParent">
                        <div class="section-heading text-center">
                            <h2 class="h-bold animated bounceInDown">Get Involved In Domanda</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="row animatedParent">
            <div class="col-sm-12 col-md-12 col-lg-12" >

                <div class="row gallery-item">
                    <div class="col-md-3 animated fadeInUp">
                        <a href="{{asset('domandas/img/demo_1.png')}}" title="Question Processing" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{asset('domandas/img/demo_1.png')}}">
                            <img src="{{asset('domandas/img/demo_1.png')}}" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3 animated fadeInUp slow">
                        <a href="{{asset('domandas/img/demo_2.png')}}" title="User Profile" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{asset('domandas/img/demo_2.png')}}">
                            <img src="{{asset('domandas/img/demo_2.png')}}" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3 animated fadeInUp slower">
                        <a href="{{asset('domandas/img/demo_3.png')}}" title="Analytical Graph" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{asset('domandas/img/demo_3.png')}}">
                            <img src="{{asset('domandas/img/demo_3.png')}}" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3 animated fadeInUp">
                        <a href="{{asset('domandas/img/demo_4.png')}}" title="Module Administration" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{asset('domandas/img/demo_4.png')}}">
                            <img src="{{asset('domandas/img/demo_4.png')}}" class="img-responsive" alt="img">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- /Section: works -->

<!-- Section: contact -->
<section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="animatedParent">
                    <div class="section-heading text-center">
                        <h2 class="h-bold animated bounceInDown">Get in touch with us</h2>
                        <div class="divider-header"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="row marginbot-80">
            <div class="col-md-8 col-md-offset-2">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form id="contact-form" action="" method="post" role="form" class="contactForm">
                    <div class="row marginbot-20">
                        <div class="col-md-6 xs-marginbot-20">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>
<!-- /Section: contact -->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="footer-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Press release</a></li>
                </ul>
            </div>
            <div class="col-md-6 text-right copyright">
                Domanda Leipzig GmbH 2017
                <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bocor
                    -->
                    {{--<a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Core JavaScript Files -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('domandas/js/jquery.sticky.js')}}"></script>
<script src="{{asset('domandas/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('domandas/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('domandas/js/jquery.appear.js')}}"></script>
<script src="{{asset('domandas/js/stellar.js')}}"></script>
<script src="{{asset('domandas/js/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('domandas/js/custom.js')}}"></script>
<script src="{{asset('domandas/js/css3-animate-it.js')}}"></script>
<script>
    $(document).ready(function () {
        var sound_1 = new Audio('{{asset('domandas/sound/welcome.mp3')}}');
        var sound_2 = new Audio('{{asset('domandas/sound/to.mp3')}}');
        var sound_3 = new Audio('{{asset('domandas/sound/domanda.mp3')}}');
        sound_1.play();
        setTimeout(function () {
            sound_2.play();
        }, 800);
        setTimeout(function () {
            sound_3.play();
        }, 1200);
    });
    $("#login_trigger").click(function () {
        $("#login-modal").toggle("slow");
    });
</script>
</body>

</html>
