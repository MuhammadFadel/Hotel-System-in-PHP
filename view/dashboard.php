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
        <li class="active"><a data-toggle="tab" href="#offers">Offers</a></li>
        <li><a data-toggle="tab" href="#event">Events</a></li>
        <li><a data-toggle="tab" href="#statues">Statues</a></li>
        
      </ul>

      <div class="tab-content mar-top">
          
          
        <div id="offers" class="tab-pane fade in active">
            
          <div class="panel-group" id="offer">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#offer" href="#addOffer">
                      Add New Offer</a>
                    </h4>
                  </div>
                  <div id="addOffer" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <!--panel Body-->
                        
                        <form class="form-horizontal" action="room.php" method="#">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="title">Title:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="title" placeholder="Enter Title">                                                               
                              </div>
                              <label class="control-label col-sm-1" for="image">Image:</label>
                              <div class="col-sm-3">
                                  <input type="file"  id="image">                                                               
                              </div>
                            </div>
                            <div class="form-group">                              
                              <label class="control-label col-sm-2" for="content">Contect:</label>
                              <div class="col-sm-10">                                 
                                <textarea class="form-control" rows="5" id="content" placeholder="Enter Content"></textarea>
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">ADD</button>
                              </div>
                            </div>
                        </form>
                        
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#offer" href="#editOffer">
                      Edit Offer</a>
                    </h4>
                  </div>
                  <div id="editOffer" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!--body-->
                        <form class="form-horizontal" action="room.php" method="#">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="title">Title:</label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="Title">
                                      <option>offer 1</option>
                                      <option>offer 2</option>
                                      <option>offer 3</option>                      
                                    </select> 
                              </div>
                              <label class="control-label col-sm-1" for="image">Image:</label>
                              <div class="col-sm-3">
                                  <input type="file"  id="image">                                                               
                              </div>
                            </div>
                            <div class="form-group">                              
                              <label class="control-label col-sm-2" for="content">Contect:</label>
                              <div class="col-sm-10">                                 
                                <textarea class="form-control" rows="5" id="content" placeholder="Enter Content"></textarea>
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Edit</button>
                              </div>
                            </div>
                        </form>
                    </div>
                  </div>
                    
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#offer" href="#deleteOffer">
                      Delete Offer</a>
                    </h4>
                  </div>
                  <div id="deleteOffer" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form class="form-horizontal" action="room.php" method="#">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="title">Title:</label>
                              <div class="col-sm-10">
                                  <select class="form-control" id="Title">

                                      <option>offer 1</option>
                                      <option>offer 2</option>
                                      <option>offer 3</option>                      
                                    </select> 
                              </div>
                            </div>
                            <div class="form-group">                              
                              <label class="control-label col-sm-2" for="content">Contect:</label>
                              <div class="col-sm-10">                                 
                                  <textarea class="form-control" rows="5" id="content" placeholder="Enter Content" readonly></textarea>
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Delete</button>
                              </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            
        </div>
          
          
          
        <div id="event" class="tab-pane fade">
         
            
            <div class="panel-group" id="events">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#events" href="#addEvent">
                      Add New Event</a>
                    </h4>
                  </div>
                  <div id="addEvent" class="panel-collapse collapse in">
                    <div class="panel-body">
                    <!--body-->
                    
                        <form class="form-horizontal" action="room.php" method="#">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="title">Title:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="title" placeholder="Enter Title">                                                               
                              </div>
                              <label class="control-label col-sm-1" for="image">Image:</label>
                              <div class="col-sm-3">
                                  <input type="file"  id="image">                                                               
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="place">Place:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="place" placeholder="Enter Title">                                                               
                              </div>
                              <label class="control-label col-sm-1" for="time">Time:</label>
                              <div class="col-sm-3">
                                  <input type="time"  id="time">                                                               
                              </div>
                            </div>
                            <div class="form-group">                              
                              <label class="control-label col-sm-2" for="content">Contect:</label>
                              <div class="col-sm-10">                                 
                                <textarea class="form-control" rows="5" id="content" placeholder="Enter Content"></textarea>
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">ADD</button>
                              </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#events" href="#editEvent">
                      Edit Event</a>
                    </h4>
                  </div>
                  <div id="editEvent" class="panel-collapse collapse">
                    <div class="panel-body">
                    <!--body-->
                    <form class="form-horizontal" action="room.php" method="#">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="title">Title:</label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="place" placeholder="Enter Title"> 
                              </div>
                              <label class="control-label col-sm-1" for="image">Image:</label>
                              <div class="col-sm-3">
                                  <input type="file"  id="image">                                                               
                              </div>
                            </div>
                        <div class="form-group">
                              <label class="control-label col-sm-2" for="place">Place:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="place" placeholder="Enter Title">                                                               
                              </div>
                              <label class="control-label col-sm-1" for="time">Time:</label>
                              <div class="col-sm-3">
                                  <input type="time"  id="time">                                                               
                              </div>
                            </div>
                            <div class="form-group">                              
                              <label class="control-label col-sm-2" for="content">Contect:</label>
                              <div class="col-sm-10">                                 
                                <textarea class="form-control" rows="5" id="content" placeholder="Enter Content"></textarea>
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Edit</button>
                              </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#events" href="#deleteEvent">
                      Delete Event</a>
                    </h4>
                  </div>
                  <div id="deleteEvent" class="panel-collapse collapse">
                    <div class="panel-body">
                    <!--body-->
                    <form class="form-horizontal" action="room.php" method="#">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="title">Title:</label>
                              <div class="col-sm-10">
                                 <select class="form-control" id="Title">
                                      <option>offer 1</option>
                                      <option>offer 2</option>
                                      <option>offer 3</option>                      
                                    </select> 
                              </div>                              
                            </div>
                            <div class="form-group">                              
                              <label class="control-label col-sm-2" for="content">Contect:</label>
                              <div class="col-sm-10">                                 
                                <textarea class="form-control" rows="5" id="content" placeholder="Enter Content"></textarea>
                              </div>
                            </div>
                            
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Edit</button>
                              </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            
        </div>

            
        
          
          
        <div id="statues" class="tab-pane fade">
         
            <div>
                <form>
                    <table class="table table-responsive table-hover">
                        <tr>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Receptionist</th>
                            <th>Blocked</th>
                        </tr>
                        <tr>
                            <td>Muhammad M. Fadel</td>
                            <td>MuhammadM.Fadel@outlook.com</td>
                            <td><input type="checkbox" name="receptionist" value="isReceptionist"></td>
                            <td><input type="checkbox" name="block" value="isBlocked"></td>
                        </tr>
                        <tr>
                            <td>Muhammad M. Fadel</td>
                            <td>MuhammadM.Fadel@outlook.com</td>
                            <td><input type="checkbox" name="receptionist" value="isReceptionist"></td>
                            <td><input type="checkbox" name="block" value="isBlocked"></td>
                        </tr>
                        <tr>
                            <td>Muhammad M. Fadel</td>
                            <td>MuhammadM.Fadel@outlook.com</td>
                            <td><input type="checkbox" name="receptionist" value="isReceptionist"></td>
                            <td><input type="checkbox" name="block" value="isBlocked"></td>
                        </tr>
                        <tr>
                            <td>Muhammad M. Fadel</td>
                            <td>MuhammadM.Fadel@outlook.com</td>
                            <td><input type="checkbox" name="receptionist" value="isReceptionist"></td>
                            <td><input type="checkbox" name="block" value="isBlocked"></td>
                        </tr>
                        <tr>
                            <td>Muhammad M. Fadel</td>
                            <td>MuhammadM.Fadel@outlook.com</td>
                            <td><input type="checkbox" name="receptionist" value="isReceptionist"></td>
                            <td><input type="checkbox" name="block" value="isBlocked"></td>
                        </tr>
                    </table>
                </form>
            </div>
            
        </div>
          
        
          
          
    </div>
</div>

<?php include 'footer.php'; ?>
