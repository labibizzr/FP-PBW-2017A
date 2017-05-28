<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?> | HIMATIKA UNAIR</title>
    <link href="<?php echo base_url() . "assets/";?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/";?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/";?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/";?>css/lightbox.css" rel="stylesheet">
	  <link href="<?php echo base_url() . "assets/";?>css/main.css" rel="stylesheet">
	   <link href="<?php echo base_url() . "assets/";?>css/responsive.css" rel="stylesheet">
     <link href="<?php echo base_url() . "assets/";?>css/custom.css" rel="stylesheet">
    <?php include 'switch_bootstrap.php'; ?>

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">
        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div> -->
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    	<h1><img class="img-rounded" src="<?php echo base_url(); ?>assets/images/logohima.png" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($this->uri->segment(1)==""){echo 'class="active"';}?> >
                            <?php echo anchor('','Home'); ?>
                        </li>

                        <li <?php if($this->uri->segment(1)=="kepengurusan" || $this->uri->segment(1)=="prokda"  ) echo 'class="dropdown active"';
                                else echo 'class="dropdown"'; ?> >
                            <a>About us <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo site_url('kepengurusan')?>">Kepengurusan</a></li>
                                <li><a href="<?php echo site_url('prokda') ?>">Prokda</a></li>

                            </ul>
                        </li>
                        <li <?php if($this->uri->segment(1)=="berita"){echo 'class="active"';}?>>
                            <?php echo anchor('berita','Berita'); ?>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>
