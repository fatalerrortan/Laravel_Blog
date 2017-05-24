<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Domanda</title>

    <!-- css -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('domandas/css/nivo-lightbox.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('domandas/css/nivo-lightbox-theme/default/default.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('domandas/css/animations.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('domandas/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('domandas/color/default.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('domandas/css/loginmodal.css')); ?>" rel="stylesheet">

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
                    <p class="animated fadeInUp">a successful <b>Business Innovation</b> starts from here</p>
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
                            <img class="img-responsive img-circle" width="100px" height="100px" src="<?php echo e(asset('domandas/img/icons/domanda_icon.png')); ?>" style="display: inline" alt="">
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
                            <li class="active" id="login_trigger"><a href="#login-modal">Login</a></li>
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
                <img class="img-circle" id="img_logo" src="<?php echo e(asset('domandas/img/icons/domanda_small_logo.png')); ?>">
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" method="post" action="<?php echo e(secure_url('/domanda/dashboard')); ?>">
                    <?php echo e(csrf_field()); ?>

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
                        Domanda supports a direct and efficient way to solve issues. Long searching for the right contact and long interruptions of the actual activity are a thing of the past.
                        This tool will help you to clarify such problems within a few minutes and send your Question to the perfect specialist. And all from your WORKSPACE!
                        You can devote yourself your current activities and will be notified as soon as the question has been resolved.                    </p>
                    <p>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">“Sometimes it s very difficult to find the right person for a specific question…”
                            Peter Hurandu (PHP Developer)</div>
                        <div class="col-md-4">“Clarify an issue can take a long time, sometimes 1 or 2 h…”
                            Angela Menderez (Marketing Assistant)</div>
                        <div class="col-md-4">“Many questions stay unresolved because there is often no time to search for the right contact…”
                            Hans-Uwe Xulin (Web Developer)</div>
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
                                <span class="fa fa-laptop fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Domanda Service 1</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1
                                </p>
                                <a href="#" class="btn btn-skin">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="animated rotateInDownLeft slow">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-camera fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Domanda Service 2</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1
                                </p>
                                <a href="#" class="btn btn-skin">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="animated rotateInDownLeft slower">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-code fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Domanda Service 3</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1 Domanda Service 1
                                </p>
                                <a href="#" class="btn btn-skin">Learn more</a>
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
                            <h2 class="h-bold animated bounceInDown"></h2>
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
                        <a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                            <img src="" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3 animated fadeInUp slow">
                        <a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                            <img src="" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3 animated fadeInUp slower">
                        <a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                            <img src="" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3 animated fadeInUp">
                        <a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                            <img src="" class="img-responsive" alt="img">
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
                &copy;Copyright - Bocor. All Rights Reserved
                <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bocor
                    -->
                    <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Core JavaScript Files -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/jquery.sticky.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/jquery.scrollTo.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/jquery.appear.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/stellar.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/nivo-lightbox.min.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('domandas/js/css3-animate-it.js')); ?>"></script>
<script>
    $("#login_trigger").click(function () {
        $("#login-modal").toggle("slow");
    });
</script>
</body>

</html>
