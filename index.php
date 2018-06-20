<?php
        require_once './phpfile/sessionManager.php';
        if(isset($_SESSION['email'])) {
            include './view/loginHeader.php';
        }
        else {
            include './view/header.php';
        }
    
    ?>
        
<!-- **************************** Carousel **************************** -->
<div class="marginMinTop">                
    
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">

                  
                  <!-- ********************************************************************* -->
                  <div class="w3-display-left w3-padding w3-col l4 m6 s8" style="z-index: 1000; left: 10%;">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>Atlas Hotel</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
        <form action="index.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="CheckIn" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="CheckOut" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Kids</label>
          <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
      </form>
    </div>
  </div>
    
    <!-- ********************************************************************* -->
                  
                  
                  
                  
                  
                  
                  
                <div class="item active">
                    <img src="media/images/h (1).jpg" alt="Chania" >
                  <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                  </div>
                </div>

                <div class="item">
                    <img src="media/images/h (2).jpg" alt="Chania" >
                  <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                  </div>
                </div>

                <div class="item">
                    <img src="media/images/h (3).jpg" alt="Flower" >
                  <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                  </div>
                </div>

                <div class="item">
                    <img src="media/images/h (4).jpg" alt="Flower" >
                  <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                  </div>
                </div>
                  
                <div class="item">
                    <img src="media/images/h (5).jpg" alt="Flower" >
                  <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                  </div>
                </div>
                  
                <div class="item">
                    <img src="media/images/h (6).jpg" alt="Flower" >
                  <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                  </div>
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>

            
<!-- **************************** End Of Carousel **************************** -->

    <!-- ************************ information start here ********************* -->
    
        <div class="information">
                <div class="container">
                        <div class="information-main">
                                  <div class="information-grid five-star wow wowload fadeInDown" data-wow-delay="0.2s">
                                        <div class="col-md-4 hotel-info">
                                                <div class="info-left">
                                                    <img src="media/images/s1.png" alt="">
                                                </div>
                                                <div class="info-right">
                                                        <h4>Star Hotel</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                                </div>
                                          <div class="clearfix"> </div>
                                        </div>
                                        <div class="col-md-4 hotel-info">
                                                <div class="info-left">
                                                    <img src="media/images/s2.png" alt="">
                                                </div>
                                                <div class="info-right">
                                                        <h4>services</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                                </div>
                                          <div class="clearfix"> </div>
                                        </div>
                                        <div class="col-md-4 hotel-info">
                                                <div class="info-left">
                                                    <img src="media/images/s4.png" alt="">
                                                </div>
                                                <div class="info-right">
                                                        <h4>Secure</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                                </div>
                                          <div class="clearfix"> </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                  </div>
                                  <div class="information-grid wow wowload fadeInUp" data-wow-delay="0.2s">
                                        <div class="col-md-4 hotel-info">
                                                <div class="info-left">
                                                    <img src="media/images/s3.png" alt="">
                                                </div>
                                                <div class="info-right">
                                                        <h4>Food</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                                </div>
                                          <div class="clearfix"> </div>
                                        </div>
                                        <div class="col-md-4 hotel-info">
                                                <div class="info-left">
                                                    <img src="media/images/s5.png" alt="">
                                                </div>
                                                <div class="info-right">
                                                        <h4>Hotel</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                                </div>
                                          <div class="clearfix"> </div>
                                        </div>
                                        <div class="col-md-4 hotel-info">
                                                <div class="info-left">
                                                    <img src="media/images/s6.png" alt="">
                                                </div>
                                                <div class="info-right">
                                                        <h4>Bell</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                                </div>
                                          <div class="clearfix"> </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                  </div>
                                <div class="clearfix"> </div>
                        </div>
                </div>
        </div>
<!-- ************************* information end here ************************* -->



<!-- **************************** About Us *********************************** -->

        <div class="bd-about-index">
            <div class="container">
                <div class="row">
                    <div class="page-header">
                            <h1>Welcome</h1>
                        </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 wowload flipInX animated" data-wow-delay=".2s">

                        <p>
                            A hotel is an establishment that provides paid lodging on a short-term basis.
                            Facilities provided may range from a modest-quality mattress in a small room
                            to large suites with bigger, higher-quality beds, a dresser, a fridge and other
                            kitchen facilities, upholstered chairs, a flatscreen television and en-suite bathrooms.
                            A hotel is an establishment that provides paid lodging on a short-term basis.
                            Facilities provided may range from a modest-quality mattress in a small room
                            to large suites with bigger, higher-quality beds, a dresser, a fridge and other
                            kitchen facilities, upholstered chairs, a flatscreen television and en-suite bathrooms.
                            A hotel is an establishment that provides paid lodging on a short-term basis.
                            Facilities provided may range from a modest-quality mattress in a small room
                            to large suites with bigger, higher-quality beds, a dresser, a fridge and other
                            kitchen facilities, upholstered chairs, a flatscreen television and en-suite bathrooms.
                        </p>
                        <a href="#" class="btn btn-default btn-primary">Details >></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wowload  lightSpeedIn animated" data-wow-delay=".2s">
                        <img src="media/images/notUsed/02.jpg" alt="Hotel Image" class="img-thumbnail img-responsive"/>
                    </div>
                </div>            
            </div>
        </div>
<!-- **************************** End Of About Us **************************** -->

<!-- *************************** services ************************************ -->
<div class="ourServicesPadd">
    <div class="container">
            <div class="page-header">
                <h1>Our Services</h1>
            </div>
         </div>
            <div class="spacer services wowload fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- RoomCarousel -->
                        <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="item active"><img src="media/images/2.jpg" class="img-responsive" alt="slide"></div>                
                            <div class="item  height-full"><img src="media/images/1.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="media/images/0.jpg"  class="img-responsive" alt="slide"></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- RoomCarousel-->
                        <div class="caption">Rooms<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
                    </div>


                    <div class="col-sm-4">
                        <!-- RoomCarousel -->
                        <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active"><img src="media/images/0.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="media/images/1.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="media/images/2.jpg"  class="img-responsive" alt="slide"></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- RoomCarousel-->
                        <div class="caption">Tour Packages<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
                    </div>


                    <div class="col-sm-4">
                        <!-- RoomCarousel -->
                        <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="item active"><img src="media/images/0.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="media/images/2.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="media/images/1.jpg"  class="img-responsive" alt="slide"></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- RoomCarousel-->
                        <div class="caption">Food and Drinks<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
                    </div>
                </div>
            </div>
            </div>
        
</div>
<!--************************************ End Of Services ******************************* -->



<!--************************************ Event ******************************* -->
<div class="eventPadd">
    <section id="event" class="section-padding">
      <div class="bg-color2">
        <div class="container">
          <div class="row">
            <h2 class="section-title  no-padding text-center white">Upcoming Event</h2>
            <div class="col-md-6 col-sm-12">
              <div class="element-wrapper">
                  <img src="media/images/event01.jpg" alt="" class="img-responsive">
                <div class="element-big-image-mask">
                  <div class="mask-content">
                    <h3 class="mask-content-title">"Bringing <strong>taste</strong> and <br> <strong>elegance</strong> in the same place..."</h3>
                    <p><strong>Saveur</strong>. 212 Ave Lorem, London, UK<br>Since November 05, 2002</p>
                  </div>          
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 no-padding ext-pad">
              <div class="col-md-12 no-padding">
                <div class="content-holder white">
                  <h2>Joyful party</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Labore eos suscipit earum voluptas aliquam recusandae, 
                      quae iure adipisci, inventore quia, quos delectus quaerat
                      praesentium id expedita nihil illo accusantium, tempora.</p>
                  <address>
                    <strong>Place: </strong>
                    1612 Collins Str, Victoria 8007
                    <br>
                    <strong>Time: </strong>
                    07:30pm
                  </address>
                  <a class="button expanded" href="#section-menu">Read more</a>
                </div>
              </div>
              <div class="col-md-12 no-padding">
                <div class="col-md-6 col-sm-6 element-services no-padding">
                  <div class="element-wrapper2">
                    <!-- element box -->
                    <div class="element-box">
                      <div class="element-box-bg">  
                      <!-- box title -->
                      <h2 class="element-box-title">
                        <span>Restaurant</span>
                      </h2>
                                                  <!-- /box-title -->       
                      <!-- Service Item-->
                      <div class="service-item">
                                        
                          <h2 class="service-title">Opening hours</h2>
                                                        <div class="service-description">
                                                            <dl class="dl-horizontal hours-list">
                                                                      <dt>Monday</dt>
                                <dd>11am - 2pm</dd>
                                                                        <dt>Tuesday</dt>
                                <dd>11 am - 22 pm</dd>
                                                                        <dt>Wednesday</dt>
                                <dd>15pm - 23pm</dd>
                                                                        <dt>Thursday</dt>
                                <dd>15pm - 23pm</dd>
                                                                        <dt>Friday</dt>
                                <dd>15pm - 23pm</dd>
                                                                        <dt>Saturday</dt>
                                <dd>11am - 22pm</dd>
                                                                        <dt>Sunday</dt>
                                <dd>Closed</dd>
                                                                        
                              </dl>
                                                            </div>
                      </div>
                      <!-- /Service Item -->
                      </div>          
                    </div>
                    <!-- /element-box -->
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 element-services no-padding-right">
                    <img src="media/images/event01.jpg" alt="" class="img-responsive" style="height: 292px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>


<!-- ******************************* End Of Events***************************** -->


    <?php include './view/footer.php';?>