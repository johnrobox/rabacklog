<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/main_page/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/main_page/favicon.png">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Restaurant </title>

    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>css/coming-sssoon.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/main_page/flags/US.png"/>
                English(US)
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="images/main_page/flags/DE.png"/> Deutsch</a></li>
                <li><a href="#"><img src="images/main_page/flags/GB.png"/> English(UK)</a></li>
                <li><a href="#"><img src="images/main_page/flags/FR.png"/> Français</a></li>
                <li><a href="#"><img src="images/main_page/flags/RO.png"/> Română</a></li>
                <li><a href="#"><img src="images/main_page/flags/IT.png"/> Italiano</a></li>

                <li class="divider"></li>
                <li><a href="#"><img src="images/main_page/flags/ES.png"/> Español <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/main_page/flags/BR.png"/> Português <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/main_page/flags/JP.png"/> 日本語 <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/main_page/flags/TR.png"/> Türkçe <span class="label label-default">soon</span></a></li>

              </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li>
              <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  Login
              </a>
          </li>
          <li>
              <a href="<?php echo base_url();?>index.php/RegisterController/">
                  Register
              </a>
          </li>
          
            <li>
                <a href="#">
                    <i class="fa fa-facebook-square"></i>
                    Like
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                    Tweet
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-gittip"></i>
                    Gittip
                </a>
            </li>
       </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('images/main_page/restaurant.jpg')">

<!--    Change the image source '/images/restaurant.jpg')" with your favourite image.     -->

    <div class="cover black" data-color="black"></div>

<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
