<?php include_once ('config/config.php'); ?>
<?php include_once ('lib/Session.php'); ?>
<?php include_once ('lib/Format.php'); ?>
<?php include_once ('lib/Database.php'); ?>

<?php
Session::init();
//Session::checkSession();
?>
<?php 
    spl_autoload_register(function($class){
        include_once "classes/".$class.".php";
    });
?>
<?php
    $db = new Database();
    $fm = new Format();
    $cs = new Customer();
    $adm = new Admin();
    $usid = Session::get('id');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icons/favicon.png"/>
<title>sKyTouch Airways</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
<link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.min.css">
<link href="css/responsive.css" rel="stylesheet">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
<script src="js/instafeed.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</head>
<body>
<div id="page">
<!---header top---->
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6"><div class="social-grid">
                    <ul class="list-unstyled text-right">
                        <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
                        
                    </ul>
                </div></div>
        </div>
    </div>
</div>
<!--header--->
<header class="header-container">
    <div class="container">
        <div class="top-row">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div id="logo">
                        <!--<a href="index.html"><img src="images/log12.jpg" alt="logo"></a>-->
                        <a href="#"><span>Sky Touch</span></a>
                    </div>                       
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header page-scroll">
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                            <ul class="list-unstyled nav1 cl-effect-10">
                                <li><a  data-hover="Home" href="adminhome.php"><span>Home</span></a></li>
                                <li><a data-hover="Add Flight"  href="addflight.php"><span>Add Flight</span></a></li>
                                <li><a data-hover="Add Flight"  href="addairport.php"><span>Add Airport</span></a></li>
                                <li><a data-hover="Booking List"  href="all.php"><span>Booking List</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>