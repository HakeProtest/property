<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Home</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/front/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="<?= base_url();?>assets/front/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url();?>assets/front/css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/front/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/front/css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?= base_url();?>assets/front/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="<?= base_url();?>assets/front/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="<?= base_url();?>assets/front/css/style.css" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    1-900-523-3564
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@propertybengkulu.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                 
                  <a href="<?= base_url();?>login" class="aa-login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <!-- Text based logo -->
           <a class="navbar-brand aa-logo" href="<?php echo base_url(); ?>"> Property <span>Bengkulu</span></a>
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="<?= base_url();?>assets/front/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">HOME</a></li>
             <li class="dropdown">
              <a href="<?php echo base_url(); ?>c_property/listProperty">PROPERTIES</span></a>
              
            </li>
            <li><a href="<?php echo base_url(); ?>welcome/projek">PROJEK</a></li>
           <li><a href="<?php echo base_url(); ?>welcome/agen">AGEN</a></li>
            <li><a href="<?php echo base_url(); ?>c_property/kontak">CONTACT</a></li>
          
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->