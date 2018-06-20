<?php
        require_once './sessionManager.php';
        if(isset($_SESSION['email'])) {
            include './loginHeader.php';
        }
        else {
            include 'header.php';
        }
    
    ?>

    

<div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#user">User</a></li>
        <li><a data-toggle="tab" href="#order">Order</a></li>
        
      </ul>

      <div class="tab-content mar-top">
          
          
        <div id="user" class="tab-pane fade in active">
            
          <div class="panel-group" id="users">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#users" href="#addUser">
                      Add New User</a>
                    </h4>
                  </div>
                  <div id="addUser" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <!--panel Body-->
                        
                        <form class="form-horizontal" action="room.php" method="#">
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="fname">First Name:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="title" placeholder="Enter First Name">                                                               
                              </div>
                              <label class="control-label col-sm-2" for="lname">Last Name:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">                                                               
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">E-mail:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="email" placeholder="Enter First Name">                                                               
                              </div>
                              <label class="control-label col-sm-2" for="phone">Phone:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="phone" placeholder="Enter Last Name">                                                               
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="password1">Password:</label>
                              <div class="col-sm-4">
                                  <input type="password" class="lock form-control" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Password" id="password1" required />

                                                                                             
                              </div>
                              <label class="control-label col-sm-2" for="password2">Confirm Password:</label>
                              <div class="col-sm-4">
                                 <input type="password" class="lock form-control" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Confirm Password" id="password2" required />

                                                                                             
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-6">
                                  <input type="checkbox" name="gender" value="Male"> Male
                                <input type="checkbox" name="gender" value="Female"> Female
                                <input type="checkbox" name="gender" value="Other"> Other

                              </div>
                                
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-6">
                                <button type="submit" class="btn btn-default">ADD User</button>
                              </div>
                            </div>
                            
                        </form>
                        
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#users" href="#editUser">
                      Edit User</a>
                    </h4>
                  </div>
                  <div id="editUser" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!--body-->
                         <form class="form-horizontal" action="room.php" method="#">
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="fname">First Name:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="title" placeholder="Enter First Name">                                                               
                              </div>
                              <label class="control-label col-sm-2" for="lname">Last Name:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">                                                               
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">E-mail:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="email" placeholder="Enter First Name">                                                               
                              </div>
                              <label class="control-label col-sm-2" for="phone">Phone:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="phone" placeholder="Enter Last Name">                                                               
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="password1">Password:</label>
                              <div class="col-sm-4">
                                  <input type="password" class="lock form-control" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Password" id="password1" required />

                                                                                             
                              </div>
                              <label class="control-label col-sm-2" for="password2">Confirm Password:</label>
                              <div class="col-sm-4">
                                 <input type="password" class="lock form-control" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Confirm Password" id="password2" required />

                                                                                             
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-6">
                                  <input type="checkbox" name="gender" value="Male"> Male
                                <input type="checkbox" name="gender" value="Female"> Female
                                <input type="checkbox" name="gender" value="Other"> Other

                              </div>
                                
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-6">
                                <button type="submit" class="btn btn-default">Edit User</button>
                              </div>
                            </div>
                            
                        </form>
                        
                        
                    </div>
                  </div>
                    
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#users" href="#deleteUser">
                      Delete User</a>
                    </h4>
                  </div>
                  <div id="deleteUser" class="panel-collapse collapse">
                    <div class="panel-body">
                         <form class="form-horizontal" action="room.php" method="#">
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="fname">First Name:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="title" placeholder="Enter First Name" readonly>                                                               
                              </div>
                              <label class="control-label col-sm-2" for="lname">Last Name:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" readonly>                                                               
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">E-mail:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="email" placeholder="Enter First Name" readonly>                                                               
                              </div>
                              <label class="control-label col-sm-2" for="phone">Phone:</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="phone" placeholder="Enter Last Name" readonly>                                                               
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="password1">Password:</label>
                              <div class="col-sm-4">
                                  <input type="password" class="lock form-control" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Password" id="password1" required readonly/>

                                                                                             
                              </div>
                              <label class="control-label col-sm-2" for="password2">Confirm Password:</label>
                              <div class="col-sm-4">
                                 <input type="password" class="lock form-control" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Confirm Password" id="password2" required readonly/>

                                                                                             
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-6">
                                  <input type="checkbox" name="gender" value="Male" readonly> Male
                                <input type="checkbox" name="gender" value="Female" readonly> Female
                                <input type="checkbox" name="gender" value="Other" readonly> Other

                              </div>
                                
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-6">
                                <button type="submit" class="btn btn-default">Delete User</button>
                              </div>
                            </div>
                            
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            
        </div>
          
          
          
        <div id="order" class="tab-pane fade">
         
            
            <div class="panel-group" id="orders">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#orders" href="#addOrder">
                      Add New Order</a>
                    </h4>
                  </div>
                  <div id="addOrder" class="panel-collapse collapse in">
                    <div class="panel-body">
                    <!--body-->
                    
                        
                       
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#orders" href="#editOrders">
                      Edit Order</a>
                    </h4>
                  </div>
                  <div id="editOrders" class="panel-collapse collapse">
                    <div class="panel-body">
                    <!--body-->
                    
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#orders" href="#deleteOrder">
                      Delete Order</a>
                    </h4>
                  </div>
                  <div id="deleteOrder" class="panel-collapse collapse">
                    <div class="panel-body">
                    <!--body-->
                    <form action="#" method="post" class="form-group">
                        <label class="control-label">E-Mail:</label>
                        <input class="form-control" name="email" type="email">
                             
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            
        </div>                                                
          
        
          
          
    </div><!-- script for password confirmation -->
                    <script type="text/javascript">
                        window.onload = function () {
                            document.getElementById("password1").onchange = validatePassword;
                            document.getElementById("password2").onchange = validatePassword;
                        }
                        function validatePassword() {
                            var pass2 = document.getElementById("password2").value;
                            var pass1 = document.getElementById("password1").value;
                            if (pass1 != pass2)
                                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                            else
                                document.getElementById("password2").setCustomValidity('');
                            //empty string means no validation error
                        }
                    </script>
                    <!-- //script for password confirmation -->
</div>


<?php    include 'footer.php'; ?>