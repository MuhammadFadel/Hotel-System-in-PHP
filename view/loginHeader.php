<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!-- ************************************************************************* -->
    <!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- ***************************************************************************** -->

<html lang="en">    
    <head>
        <meta charset="utf-8">
        <title>Atlas|Hotel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="	Hotels, Hotel, hotel, Atlas, atlas, reast, relax, relaxation, Rooms, Room, Reservation">
        <meta name="description" content="Atlas hotel welcome to you, our target to make you comfortable, our notifications are Guest, Honest, Sanitation, Good Service">   
        <link rel="icon" href="media/icon/icon.png" type="image/x-icon">

        <!--W3 Style-->
        <link rel="stylesheet" href="assets/W3v4.css">
        
        <!--BootStrap Style $$ Font-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        
        <!--Font-awesome Style-->
        <link rel="stylesheet" href="style/fonts/font-awesome.min.css">
        
        <!--Font Style-->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        

        <!-- animate.css -->
        <link rel="stylesheet" href="assets/wow/animate.css" />
        <link rel="stylesheet" href="assets/animate.css" >
        

        <!-- gallery -->

        <link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
         
            
        <!--Page Style-->
        <link rel="stylesheet" href="style/css/indexStyle.css" type="text/css">
        <link rel="stylesheet" href="style/css/aboutStyle.css" type="text/css">
        <link rel="stylesheet" href="style/css/serviceStyle.css" type="text/css">
        <link rel="stylesheet" href="style/css/roomStyle.css" type="text/css">
        <link rel="stylesheet" href="style/css/singleStyle.css" type="text/css">
        <link rel="stylesheet" href="style/css/contactStyle.css" type="text/css">
<!--        <link href="style/css/signUpStyle.css" rel="stylesheet" type="text/css" media="all"/>-->
        <link rel="stylesheet" href="style/css/jquery-ui.css" type="text/css">
        
        
        <!--[if lt IE 9]>
            <script src="assets/html5shiv.js"></script>
        <![endif]-->
        
        
        <?php 
            $pageName = $_SERVER['SCRIPT_NAME'];          
        ?>

    </head>
    <body>
        
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php">Atlas</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li <?php 
          if($pageName == '/SWE1Project/index.php'){
          echo 'class="active"';
          } ?> >
              <a href="index.php">Home</a></li>
          
          <li <?php 
          if($pageName == '/SWE1Project/about.php'){
          echo 'class="active"';
          } ?> >
              <a href="about.php">About</a></li>
          <li <?php 
          if($pageName == '/SWE1Project/service.php'){
          echo 'class="active"';
          } ?> >
              <a href="service.php">Service</a></li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="room.php">Room <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="single.php">Single</a></li>
              <li><a href="double.php">Double</a></li>
              <li><a href="triple.php">Triple</a></li>
              <li><a href="suite.php">Suite</a></li>
          </ul>
        </li>
                
        <li <?php 
          if($pageName == '/SWE1Project/room.php'){
          echo 'class="active"';
          } ?> >
            <a href="room.php">Offer</a></li>
        
        <li <?php 
          if($pageName == '/SWE1Project/contact.php'){
          echo 'class="active"';
          } ?> 
            ><a href="contact.php">Contact</a></li>
        
      </ul>
      
      <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      
      <ul class="nav navbar-nav navbar-right">
          <li <?php 
          if($pageName == '/SWE1Project/book.php'){
          echo 'class="active"';
          } ?> >
              <a href="booking.php"><span class="fa fa-ticket"></span> BOOK</a></li>
          
          <li><a href="profile.php"><img src="./media/images/john.png" class="headerUserImg img-circle img-responsive"> <?php echo $_SESSION['fullName']; ?></a></li>
          
          <li <?php 
          if($pageName == '/SWE1Project/signup.php'){
          echo 'class="active"';
          } ?> >
              
              <button class="btn btn-login navbar-btn"><span class="fa fa-sign-out"></span ><a href="logout.php">Logout</a></button></li>
      </ul>
    </div>
  </div>
</nav>
        
         <!-- *---------------------------------------------------------------------------* -->
            <!-- Modal -->
            
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-log-in"></span> Login</h4>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="margin-auto">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" style="width: auto;" id="email" placeholder="Enter email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">          
                              <input type="password" class="form-control" style="width: auto;" id="pwd" placeholder="Enter password">
                            </div>
                          </div>
                          <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                  <label style="padding-left: 0;"><input type="checkbox" > Remember me</label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                              <a href="forgetPassword.php" type="submit" class="btn btn-default">Forget Password</a>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
            <div></div>
        <!-- *---------------------------------------------------------------------------* -->      
        
      