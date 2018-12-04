<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="img/fabicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/v-1/main.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Modernizr -->
    <script src="js/modernizr.custom.12691.js"></script>

</head>

<body id="page-top" class="index">


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <div class="brand-logo"><img src="img/logo-b.png"></div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Why Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <?= $content; ?>
        </div>
    </header>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; GeckPro</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="copyright text-right">Designed & Developed by <a href="#">ThemesGeck</a></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-push-1 co-sm-12 col-sm-push-0">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Portfolio</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive" src="img/portfolio/portfolio-3.jpg" alt="GeckPro">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <h1>H1 : Quisque non semper justo</h1>
							<h2>H2 : Quisque non semper justo</h2>
							<h3>H3 : Quisque non semper justo</h3>
							<h4>H4 : Quisque non semper justo</h4>
							<h5>H5 : Quisque non semper justo</h5>
							<h6>H6 : Quisque non semper justo</h6>
							<p>Nunc pellentesque mauris ut magna pulvinar, quis fermentum tellus pulvinar. Curabitur ut fermentum quam. Nam tincidunt sagittis neque in elementum. Fusce convallis cursus porta. Curabitur dapibus pretium leo, at laoreet magna ullamcorper ac. Integer quam nulla, fringilla ac imperdiet at, consequat vel leo. Quisque non semper justo, eu aliquam velit. Pellentesque rhoncus, quam ac fringilla euismod, ligula diam congue orci, id cursus dui velit quis ligula.</p>
                            <ul class="list-inline">
                                <li>Name: <b>GeckPro</b></li>
                                <li>Category: <b>Web Design</b></li>
                            </ul>
                            <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Team Modal -->
    <div class="team-modal modal fade" id="teamModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-push-1 co-sm-12 col-sm-push-0">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Adam Czajkowski</h2>
                            <p class="item-intro text-muted">Chief Executive Officer</p>
                            <img class="img-responsive" src="img/team/team-1.jpg" alt="GeckPro">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <h1>H1 : Quisque non semper justo</h1>
							<h2>H2 : Quisque non semper justo</h2>
							<h3>H3 : Quisque non semper justo</h3>
							<h4>H4 : Quisque non semper justo</h4>
							<h5>H5 : Quisque non semper justo</h5>
							<h6>H6 : Quisque non semper justo</h6>
							<p>Nunc pellentesque mauris ut magna pulvinar, quis fermentum tellus pulvinar. Curabitur ut fermentum quam. Nam tincidunt sagittis neque in elementum. Fusce convallis cursus porta. Curabitur dapibus pretium leo, at laoreet magna ullamcorper ac. Integer quam nulla, fringilla ac imperdiet at, consequat vel leo. Quisque non semper justo, eu aliquam velit. Pellentesque rhoncus, quam ac fringilla euismod, ligula diam congue orci, id cursus dui velit quis ligula.</p>
                            <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimatedHeader.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/animated-headline.js"></script>

</body>

</html>
