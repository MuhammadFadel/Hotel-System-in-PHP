<?php
require_once './sessionManager.php';
if (isset($_SESSION['email'])) {
    include './loginHeader.php';
} else {
    header("Location: index.php");
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-10"><h1>Muhammad</h1></div>
        <div class="col-sm-2"><a href="/users" class="pull-right">
                <img title="profile image" class="img-circle img-responsive" src="media/images/john.png"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->

            <ul class="list-group">
                <li class="list-group-item text-muted">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> 2.13.2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> Yesterday</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> Muhammad M. Fadel</li>

            </ul> 

            <div class="panel panel-default">
                <div class="panel-heading">E-Mail <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="#">User E-Mail</a></div>
            </div>


            <!--          <ul class="list-group">
                        <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                      </ul> -->

            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                </div>
            </div>

        </div><!--/col-3-->
        <div class="col-sm-9">

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#orders" data-toggle="tab">Orders</a></li>
                <li><a href="#review" data-toggle="tab">Review</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="orders">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Label 1</th>
                                    <th>Label 2</th>
                                    <th>Label 3</th>
                                    <th>Label </th>
                                    <th>Label </th>

                                </tr>
                            </thead>
                            <tbody id="items">
                                <tr>
                                    <td>1</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <ul class="pagination" id="myPager"></ul>
                            </div>
                        </div>
                    </div><!--/table-resp-->

                    <hr>

                    <h4>Recent Activity</h4>

                    <div class="table-responsive">
                        <table class="table table-hover">

                            <tbody>
                                <tr>
                                    <td><i class="pull-right fa fa-edit"></i> Today, 1:00 - Jeff Manzi liked your post.</td>
                                </tr>
                                <tr>
                                    <td><i class="pull-right fa fa-edit"></i> Today, 12:23 - Mark Friendo liked and shared your post.</td>
                                </tr>
                                <tr>
                                    <td><i class="pull-right fa fa-edit"></i> Today, 12:20 - You posted a new blog entry title "Why social media is".</td>
                                </tr>
                                <tr>
                                    <td><i class="pull-right fa fa-edit"></i> Yesterday - Karen P. liked your post.</td>
                                </tr>
                                <tr>
                                    <td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Philip W. liked your post.</td>
                                </tr>
                                <tr>
                                    <td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Jeff Manzi liked your post.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="review">

                    <h2></h2>

                    <ul class="list-group">
                        <li class="list-group-item text-muted">Inbox</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>

                    </ul> 

                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">


                    <hr>
                    <form class="form row" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="userName"><h4>First Name</h4></label>
                                <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['user']['fname'] ?>" id="fname" placeholder="First Name Please" title="enter your full name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6 mar-top-min-15">
                                <label for="userName"><h4>Last Name</h4></label>
                                <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $_SESSION['user']['lname'] ?>" placeholder="Last Name Please" title="enter your full name if any.">
                            </div>
                        </div>
                        <div class="form-group mar-top-min-15">                        
                            <div class="col-xs-6">
                                <label for="ssn"><h4>SSN</h4></label>
                                <input type="text" class="form-control" name="ssn" id="ssn" value="<?php echo $_SESSION['user']['ssn'] ?>" placeholder="Enter Your SSN" title="enter your SSN ">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="email" class="form-control" id="location" value="<?php echo $_SESSION['user']['nationality'] ?>" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                            </div>
                        </div>

<!--                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="image"><h4>Image</h4></label>
                                <input type="file"  name="userImage" id="image">
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="col-xs-6">
                                <br>
                                <button class="btn btn-lg btn-success " type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->

<?php include 'footer.php'; ?>