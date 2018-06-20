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

        <!--BootStrap Style $$ Font-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        
        <!--Font Style-->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        
        
        
        <!--[if lt IE 9]>
            <script src="assets/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>
       <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        
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
                                <label><input type="checkbox"> Remember me</label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default">Login</button>
                              <a href="#" type="submit" class="btn btn-default">Forget Password</a>
                            </div>
                          </div>
                        </form>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
       
       <script src="assets/jquery.js"></script>
       <script src="assets/bootstrap/js/bootstrap.js"></script>
    </body>
</html>


<?php include 'model.php'; ?>