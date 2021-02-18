<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RENT A CODER</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="../admintemplate/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="../admintemplate/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="../admintemplate/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="../admintemplate/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="../admintemplate/css/plugins/fullcalendar.min.css"/>
	<link href="../admintemplate/css/style.css" rel="stylesheet">
	<!-- end: Css -->

	<link rel="shortcut icon" href="../admintemplate/img/logomi.png">
    
  </head>
<?php
session_start();
if(!isset($_SESSION['email']))
{
header("location:../login/login.php");
}
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$email=$_SESSION['email'];
$qry="select name from free_reg where email='$email'"; 
$name=$obj->GetSingleData($qry); 

?> 
 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>RAC</b>
                </a>

             

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $name; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="../admintemplate/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="../logout.php"><span class="fa fa-power-off"></span> logout</a></li>
                     <li><a href="chatbox.php"><span class="fa fa-coffee"></span> Chatbox</a></li>
                      <li role="separator" class="divider"></li>
                    
                  </ul>
                </li>
              
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft" style="font-size: 25px;">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>

                     <li class="ripple"><a href="index.php"><span class="fa fa-home"></span>Home</a></li>

                      <li class="ripple"><a href="profile.php"><span class="fa fa-calendar-o"></span>My Profile</a></li>
                    
                     <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-calendar-o fa"></span>Jobs 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="viewjobpost.php">New Job</a></li>
                      </ul>
                    </li>

                   <li class="ripple"><a href="bank.php"><span class="fa fa-calendar-o"></span>Bank</a></li>

                   <li class="ripple"><a href="changepassword.php"><span class="fa fa-calendar-o"></span>Change Password</a></li>
                   <li class="ripple"><a href="viewfeedback.php"><span class="fa fa-calendar-o"></span>View Feedback</a></li>
                       </ul>
                </div>
            </div>
          <!-- end: Left Menu -->