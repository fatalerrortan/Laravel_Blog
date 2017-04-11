
<?php $__env->startSection("extra_css"); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="<?php echo e(asset('css/github-activity-0.1.4.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
    
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <img src="<?php echo e(asset('img/xulin.PNG')); ?>" class="img-responsive img-circle" alt="Xulin Tan">
                </div>
                <div class="col-md-7">
                    
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                    <div id="skill_img">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="<?php echo e(asset('img/icon/Magento.png')); ?>" class="img-responsive" alt="magento">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo e(asset('img/icon/laravel.png')); ?>" class="img-responsive" alt="laravel">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo e(asset('img/icon/zend.png')); ?>" class="img-responsive" alt="zend">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo e(asset('img/icon/jquery.png')); ?>" class="img-responsive" alt="jquery">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo e(asset('img/icon/react.png')); ?>" class="img-responsive" alt="react">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo e(asset('img/icon/wordpress.png')); ?>" class="img-responsive" alt="wordpress">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <h3><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Xulin Tan</h3>
                <h5><i class="fa fa-file-code-o" aria-hidden="true"></i>&nbsp;Web App Developer</h5>
                <h5><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Leipzig, Germany</h5>
                <h5><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;bss12ejb@studserv.uni-leipzig.de</h5>
                <h5><i class="fa fa-university" aria-hidden="true"></i>&nbsp;University of Leipzig</h5>
                <h5><i class="fa fa-language" aria-hidden="true"></i>&nbsp; Chinese, English, German</h5>
                <h5><i class="fa fa-chrome" aria-hidden="true"></i>&nbsp;http://www.xulin-tan.de</h5>
            </div>
        </div>
    </div>
    <hr>
        
        
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="well">
                <div id="terminal_like" class="terminal"></div>
            </div>
        </div>
    </div>
    <hr>
    
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div id="feed"></div>
        </div>
        <div class="col-md-7">
            <div class="well">
                <h3>Skills</h3>
                <h5>PHP>Mangeto 1</h5>
                <div id="progress_magento_1">
                    <div class="myBar"></div>
                </div>
                <h5>PHP>Mangeto 2</h5>
                <div id="progress_magento_2">
                    <div class="myBar"></div>
                </div>
                <h5>PHP>Laravel</h5>
                <div id="progress_laravel">
                    <div class="myBar"></div>
                </div>
                <h5>PHP>Zend framework 2</h5>
                <div id="progress_zend">
                    <div class="myBar"></div>
                </div>
                <h5>PHP>Wordpress</h5>
                <div id="progress_wordpress">
                    <div class="myBar"></div>
                </div>
                <h5>Javascript>JQuery</h5>
                <div id="progress_jquery">
                    <div class="myBar"></div>
                </div>
                <h5>Javascript>React</h5>
                <div id="progress_react">
                    <div class="myBar"></div>
                </div>
                <h5>Linux>Server</h5>
                <div id="progress_linux">
                    <div class="myBar"></div>
                </div>
            </div>
            <div class="well">
                <h3>Contact Formula</h3>
                <form id="contact">
                    <div class="form-group">
                        <label for="contact_name">Name</label>
                        <input type="email" class="form-control" id="contact_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">I will contact you via this email address</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Message</label>
                        <textarea class="form-control" id="exampleTextarea" rows="10"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo e(asset('js/typewriting.js')); ?>"></script>
    <script src="<?php echo e(asset('js/github-activity-0.1.4.min.js')); ?>"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>

    <script>
        jQuery("#skill_img img").mouseover(function () {
            jQuery(this).effect( "bounce", { times: 3}, "slow");
        });
//        jQuery(window).scroll(function() {
//            if(jQuery("#skill_img img").scrollTop() == jQuery(window).scrollTop()) {
//                jQuery("#skill_img img").effect( "bounce", { times: 3}, "slow");
//            }
//        });
        jQuery(document).ready( function(){
            setTimeout( function(){
                jQuery('.terminal').typewriting( "Who Am I ? ", {
                    "typing_interval": 50,
                    "blink_interval": "1s",
                    "cursor_color": "#00fd55"
                }, function() {
                    console.log( "END" );
                });
                var text = getText();
                setTimeout( function(){
                    jQuery('.terminal').rewrite( text, function(){
                        console.log( "END, 2." );
                    });
                }, 3300);
            }, 1000);

            GitHubActivity.feed({
                username: "fatalerrortan",
                repository: "", // optional
                selector: "#feed",
                limit: 20 // optional
            });
        });
        function getText() {
            var text = "ls -a /Xulin/Education<br>" +
                    "> (01.09.2008 - 01.06.2012) Shanghai International Studies University<br>" +
                    "> > > > > B.A. Germanistik<br>" +
                    "> (01.10.2012 - 01.02.2016) University of Leipzig<br>" +
                    "> > > > > B.Sc. Business Information Systems<br>" +
                    "> (01.10.2015 - present) University of Leipzig<br>" +
                    "> > > > > M.Sc. Business Information Systems<br>" +
                    "_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_>_><br>" +
                    "> ls -a /Xulin/Work_Experience<br>" +
                    "> (01.07.2011 - 31.07.2011) Liebherr Machinery Service (Shanghai)<br>" +
                    "> > > > > Internship in Service Earthmoving and Mining Equipment<br>" +
                    "> (22.09.2014 - 09.03.2015) M. und F. Valentin Tischlerbedarf GmbH & Co. KG(Berlin)<br>" +
                    "> > > > > Internship for Web App Development in IT department<br>" +
                    "> (01.08.2015 - present) nextOrder eBusiness GmbH(Leipzig)<br>" +
                    "> > > > > Internship for Web App Development in IT department<br>" +
                    "> echo thanks for your watching :)<br>" +
                    "> sudo shutdown -h now";
            return text;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>