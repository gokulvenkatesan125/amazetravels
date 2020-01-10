<?php include 'include/header.php';?>
   <!-- Header Area End -->
   <!-- Slider Area Start -->
   <section class="peulis-slider-area overlay">
      <div class="peulis-slide owl-carousel">
         <div class="slider-container slider-1">
            <div class="single-slider zoom"></div>
         </div>
         <div class="slider-container slider-2">
            <div class="single-slider zoom"></div>
         </div>
      </div>
      <div class="banner-area">
         <div class="banner-caption">
            <div class="container">
               <div class="row">
                  <div class="col-md-7 col-sm-7 content-home">
                     <form class="form_cars">
                        <br>
                        <h2 id="get_taxi_bld "><b>Select Cab And Get Your Quote!</b></h2>
                        <div class="cars_label">
                           <label class="radio-inline cars_logo1" id="cars_logo">
                              <input type="radio" name="optradio" checked>
                              <img id="c1" width="80" height="29px" src="assets/img/car_logo_1.png">
                              <p style="color: black" id="bld_text_logo">Dzire</p>
                           </label>
                           <label class="radio-inline cars_logo2" id="cars_logo">
                              <input type="radio" name="optradio" checked>
                              <img id="c2" width="80" height="29px" src="assets/img/car_logo_1.png">
                              <p style="color: black"id="bld_text_logo">Etios</p>
                           </label>
                           <label class="radio-inline cars_logo3" id="cars_logo1">
                              <input type="radio" name="optradio" checked>
                              <img id="c3" width="80" height="29px" src="assets/img/car_logo_2.png">
                              <p style="color: black"id="bld_text_logo">Innova</p>
                           </label>
                           <label class="radio-inline cars_logo4" id="cars_logo1">
                              <input type="radio" name="optradio" checked>
                              <img id="c4" width="80" height="29px" src="assets/img/car_logo_2.png">
                              <p style="color: black"id="bld_text_logo">Innova Crysta</p>
                           </label>
                           <label class="radio-inline cars_logo5" id="cars_logo2">
                              <input type="radio" name="optradio" checked>
                              <img id="c5" width="55" src="assets/img/car_logo_3.png">
                              <p style="color: black"id="bld_text_logo">Force Tempo</p>
                           </label>
                        </div>
                        <!--           <nav class="nav nav-tabs">
                              <a href="#" class="col-md-4 nav-item nav-link active">
                                  <i class="fa fa-home"></i> Home
                              </a>
                              <a href="#" class="col-md-4 nav-item nav-link">
                                  <i class="fa fa-user"></i> Profile
                              </a>
                              <a href="#" class="col-md-4 nav-item nav-link">
                                  <i class="fa fa-envelope"></i> Messages
                              </a>
                              
                              </nav> -->
                        <ul class="nav nav-tabs" role="tablist">
                           <li class=" col-md-4 col-xs-4 nav-item first_nav_form"> <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"><i class="fa fa-car" id="bld_text"> Outstation</i></a>
                           </li>
                           <li class="col-md-4 col-xs-4  nav-item sec_nav_form" > <a class="nav-link" data-toggle="tab"  href="#tabs-2" role="tab"><i class="fa fa-map-marker" id="bld_text"> Local</i></a>
                           </li>
                           <li class="col-md-4  col-xs-4 nav-item third_nav_form" > <a class="nav-link" data-toggle="tab"  href="#tabs-3" role="tab"><i class="fa fa-plane" id="bld_text"> Airport</i></a>
                           </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                           <div class="tab-pane active" id="tabs-1" role="tabpanel">
                              <div class="form-content">
                                 <div class="row">
                                    <div class="col-lg-6 one_way_media">
                                       
                                          <label id="one_way" class="radio-inline">
                                             <input type="radio" name="optradio1" checked><b id="one_way_bld">One Way</b>
                                          </label>
                                       
                                    </div>
                                    <div class="col-lg-6 round_way_media">
                                      
                                          <label id="round_trip" class="radio-inline">
                                             <input type="radio" name="optradio1"  checked><b id="two_way_bld">Round Trip</b>
                                          </label>
                                       
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-12  col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <input class="form-control" type="text" placeholder="Enter Pickup Location">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group col-lg-12">
                                          <form>
                                             <div class="input-group control-group after-add-more">
                                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Drop Location">
                                                <div class="input-group-btn">
                                                   <button class="btn btn-success add-more" id="add_btn" type="button"><i class="fa fa-plus" aria-hidden="true"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </form>

                                          <!-- Copy Fields -->
                                          <div class="copy hide" style="display: none;">
                                             <div class="control-group input-group" style="margin-top:10px">
                                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Drop Location">
                                                <div class="input-group-btn">
                                                   <button class="btn btn-danger remove" type="button"><i class="fa fa-minus" aria-hidden="true"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6  col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <p>Start Date:</p>
                                          <input type="text" class="form-control" id="reservation_date" class="form-control" data-select="datepicker" placeholder="MM/DD/YY">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group col-lg-12">
                                          <p>Return Date:</p>
                                          <input type="text" class="form-control" id="reservation_date" class="form-control" data-select="datepicker" placeholder="MM/DD/YY">
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                    <div class="col-lg-6  col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <div class="input-group clockpicker" data-autoclose="true">
                                             <input type="text" class="form-control" placeholder="Select time">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group col-lg-12">
                                          <input class="form-control" type="text" placeholder="Enter Members">
                                       </div>
                                    </div>
                                 </div><br>
                                 <div class="row">
                                    <div class="col-lg-12 col-xs-2">
                                       <div class="form-group col-lg-12">
                                          
                                          <a id="tab1_book_btn" class="bld_text_btn"href="checkout.php">Get Taxi</a>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="tab-pane" id="tabs-2" role="tabpanel">
                              <div class="form-content">
                                 <br>
                                 <div class="row">
                                    <div class="col-lg-6  col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <input class="form-control" type="text" placeholder="Pickup Location">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group col-lg-12">
                                          <input class="form-control" type="text" placeholder="Drop Location">
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="row"> -->
                                    
                              <!-- <div class="col-lg-12">
                                       <div class="form-group col-lg-12">
                                          <form>
                                             <div class="input-group control-group after-add-more">
                                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Drop Location">
                                                <div class="input-group-btn">
                                                   <button class="btn btn-success add-more" type="button"><i class="fa fa-plus" aria-hidden="true"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </form>
                                          Copy Fields
                                          <div class="copy hide" style="display: none;">
                                             <div class="control-group input-group" style="margin-top:10px">
                                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Drop Location">
                                                <div class="input-group-btn">
                                                   <button class="btn btn-danger remove" type="button"><i class="fa fa-minus" aria-hidden="true"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                                    
                                   <!--  </div> -->
                               
                                 <div class="row">
                                    <div class="col-lg-6  col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <p>Time</p>
                                          <div class="input-group clockpicker" data-autoclose="true">
                                             <input type="text" class="form-control" placeholder="Select Time">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group col-lg-12">
                                          <p>Members</p>
                                          <input class="form-control" type="text" placeholder="Enter Members">
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                    <div class="col-lg-12 col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <a id="tab1_book_btn" href="checkout.php" class="bld_text_btn">Get Taxi</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="tabs-3" role="tabpanel">
                              <div class="form-content">
                                 <br>
                                 <div class="row">
                                    <div class="col-lg-6  col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <input class="form-control" type="text" placeholder="Pickup Location">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group col-lg-12">
                                          <input class="form-control" type="text" placeholder="Drop Location">
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="row">


                                     <div class="col-lg-12">
                                       <div class="form-group col-lg-12">
                                          <form>
                                             <div class="input-group control-group after-add-more">
                                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Drop Location">
                                                <div class="input-group-btn">
                                                   <button class="btn btn-success add-more" type="button"><i class="fa fa-plus" aria-hidden="true"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </form>
                                          Copy Fields
                                          <div class="copy hide" style="display: none;">
                                             <div class="control-group input-group" style="margin-top:10px">
                                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Drop Location">
                                                <div class="input-group-btn">
                                                   <button class="btn btn-danger remove" type="button"><i class="fa fa-minus" aria-hidden="true"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>


                                 </div> -->
                                 <div class="row">
                                    <div class="col-lg-6  col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <p>Time</p>
                                          <div class="input-group clockpicker" data-autoclose="true">
                                             <input type="text" class="form-control" placeholder="Select Time">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group col-lg-12">
                                          <p>Members</p>
                                          <input class="form-control" type="text" placeholder="Enter Members">
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                    <div class="col-lg-12 col-xs-2">
                                       <div class="form-group col-lg-12">
                                          <b><a id="tab1_book_btn" href="checkout.php" class="bld_text_btn">Get Taxi</a></b>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <!-- <form>
                        <p>
                            <i class="fa fa-map-marker"></i>
                            <input type="text" placeholder="Where To?" />
                        </p>
                        <p>
                            <i class="fa fa-calendar"></i>
                            <select class="wide">
                                <option>Month</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </p>
                        <p>
                            <i class="fa fa-thumb-tack"></i>
                            <select class="wide">
                                <option>Tour Type</option>
                                <option>Adventure</option>
                                <option>Romantic</option>
                                <option>Vacation</option>
                                <option>Explore</option>
                                <option>Trendy</option>
                            </select>
                        </p>
                        <p>
                            <button type="submit"><i class="fa fa-map-marker"></i> Find Now</button>
                        </p>
                        </form> -->
                  <div class="col-md-5 col-sm-5">
                     <div class="banner-welcome">
                        <h4 class="text">travel with us</h4>
                        <div class="caption-inner">
                           <div class="ah-headline"> <span class="typed-static">Enjoy</span>
                              <span class="ah-words-wrapper">
                                 <b class="is-visible"> Tour</b>
                                 <b> Holiday</b>
                                 <b> Mountain</b>
                                 </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Slider Area End -->
    <!-- tariff plan Start -->
   <section class="peulis-promo-package-area section_70">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="site-heading mt-5">
                  <h2>TARIFFS</h2>
                  <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit.</p>
               </div>


               <div class="demo">
        <div class="container demobg">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h5 class="title"><img src="assets/img/dzire.jpeg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> </h5>
                            <h3 class="heading text-center">DZIRE</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><center> SEATING: 4 PASSENGERS </center></li>
                            </ul>
                        </div>
                        <span class="value">
                                
                                <center> Rs.10.5 / km </center>
                                 </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h5 class="title">
                               <img src="assets/img/etios.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236">
                              </h5>
                            <h3 class="heading text-center">ETIOS</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><center> SEATING: 6 PASSENGER </center></li>
                            </ul>
                        </div>
                        <span class="value">
                                
                                <center> Rs.10.5 / km </center>
                                 </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h5 class="title">
                            <img src="assets/img/innovacrysta.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236">
                              </h5>
                            <h3 class="heading text-center">INNOVA CRYSTA</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><center> SEATING: 6 PASSENGERS </center></li>
                            </ul>
                        </div>
                        <span class="value">
                                
                                <center> Rs.17.5 / km </center>
                                 </span>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="demo" >
        <div class="container demobg">

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h5 class="title">
                            <img src="assets/img/innovaa.png" class="rounded-circle" alt="Cinque Terre" width="304" height="236">
                            </h5>
                            <h3 class="heading text-center">INNOVA</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><center> SEATING: 6 PASSENGER </center></li>
                            </ul>
                        </div>
                        <span class="value">
                                
                                <center> Rs.13.5 / km </center>
                                 </span>
                    </div>
                </div>

   
                <div class="col-md-4 col-sm-6 mb-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h5 class="title">
                            <img src="assets/img/tempo.png" class="rounded-circle" alt="Cinque Terre" width="304" height="236">
                            </h5>
                            <h3 class="heading text-center">FORCE TEMPO</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><center> SEATING: 12 PASSENGERS </center></li>
                            </ul>
                        </div>
                       
                        <span class="value">
                                
                               <center> Rs.17.5 / km </center>
                                </span>
               
                      
                    </div>
                </div>
            </div>
        </div>
    </div>









            </div>
         </div>
    </div>
         
   </section>
   <!-- Tariff plan End -->
   <!-- Popular Tours Area Start -->
   <section class="peulis-popular-tours-area section_70">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="site-heading">
                  <h2>Popular tours</h2>
                  <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4">
               <div class="single-popular-tour">
                  <div class="popular-tour-image">
                     <img src="assets/img/popular-2.jpg" alt="Popular Tours" />
                     <div class="popular-tour-hover">
                        <ul>
                           <li><a href="#"><i class="fa fa-eye"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-heart-o"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-share-alt"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="popular-tour-desc">
                     <div class="tour-desc-top">
                        <h3><a href="tour-details.html">Glacier Walk Combo</a></h3>
                        <div class="tour_duration">
                           <p> <i class="fa fa-hourglass-half"></i>
                              5 days / 6 nights</p>
                        </div>
                        <div class="tour-desc-heading">
                           <div class="tour-rating">
                              <ul>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star-o"></i>
                                 </li>
                              </ul>
                           </div>
                           <div class="tour_feature"> <a href="#"><i class="fa fa-plane"></i></a>
                              <a href="#"><i class="fa fa-building-o"></i></a>
                              <a href="#"><i class="fa fa-cutlery"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tour-desc-bottom">
                        <div class="tour-details"> <a href="tour-details.html"><i class="fa fa-flag"></i> Book Now</a>
                        </div>
                        <div class="tour-desc-price">
                           <p>$1610.00</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="single-popular-tour">
                  <div class="popular-tour-image">
                     <img src="assets/img/popular-1.jpg" alt="Popular Tours" />
                     <div class="popular-tour-hover">
                        <ul>
                           <li><a href="#"><i class="fa fa-eye"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-heart-o"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-share-alt"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="popular-tour-desc">
                     <div class="tour-desc-top">
                        <h3><a href="tour-details.html">The Splendor of Manali </a></h3>
                        <div class="tour_duration">
                           <p> <i class="fa fa-hourglass-half"></i>
                              5 days / 6 nights</p>
                        </div>
                        <div class="tour-desc-heading">
                           <div class="tour-rating">
                              <ul>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star-o"></i>
                                 </li>
                              </ul>
                           </div>
                           <div class="tour_feature"> <a href="#"><i class="fa fa-plane"></i></a>
                              <a href="#"><i class="fa fa-building-o"></i></a>
                              <a href="#"><i class="fa fa-cutlery"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tour-desc-bottom">
                        <div class="tour-details"> <a href="tour-details.html"><i class="fa fa-flag"></i> Book Now</a>
                        </div>
                        <div class="tour-desc-price">
                           <p>$470.00</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="single-popular-tour">
                  <div class="popular-tour-image">
                     <img src="assets/img/popular-3.jpg" alt="Popular Tours" />
                     <div class="popular-tour-hover">
                        <ul>
                           <li><a href="#"><i class="fa fa-eye"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-heart-o"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-share-alt"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="popular-tour-desc">col-xs-6
                     <div class="tour-desc-top">
                        <h3><a href="tour-details.html">Great Britain Travel</a></h3>
                        <div class="tour_duration">
                           <p> <i class="fa fa-hourglass-half"></i>
                              5 days / 6 nights</p>
                        </div>
                        <div class="tour-desc-heading">
                           <div class="tour-rating">
                              <ul>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star-o"></i>
                                 </li>
                              </ul>
                           </div>
                           <div class="tour_feature"> <a href="#"><i class="fa fa-plane"></i></a>
                              <a href="#"><i class="fa fa-building-o"></i></a>
                              <a href="#"><i class="fa fa-cutlery"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tour-desc-bottom">
                        <div class="tour-details"> <a href="tour-details.html"><i class="fa fa-flag"></i> Book Now</a>
                        </div>
                        <div class="tour-desc-price">
                           <p>$820.00</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4">
               <div class="single-popular-tour">
                  <div class="popular-tour-image">
                     <img src="assets/img/popular-4.jpg" alt="Popular Tours" />
                     <div class="popular-tour-hover">
                        <ul>
                           <li><a href="#"><i class="fa fa-eye"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-heart-o"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-share-alt"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="popular-tour-desc">
                     <div class="tour-desc-top">
                        <h3><a href="tour-details.html">Beauty of Tajmahal</a></h3>
                        <div class="tour_duration">
                           <p> <i class="fa fa-hourglass-half"></i>
                              5 days / 6 nights</p>
                        </div>
                        <div class="tour-desc-heading">
                           <div class="tour-rating">
                              <ul>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star-o"></i>
                                 </li>
                              </ul>
                           </div>
                           <div class="tour_feature"> <a href="#"><i class="fa fa-plane"></i></a>
                              <a href="#"><i class="fa fa-building-o"></i></a>
                              <a href="#"><i class="fa fa-cutlery"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tour-desc-bottom">
                        <div class="tour-details"> <a href="tour-details.html"><i class="fa fa-flag"></i> Book Now</a>
                        </div>
                        <div class="tour-desc-price">
                           <p>$1170.00</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="single-popular-tour">
                  <div class="popular-tour-image">
                     <img src="assets/img/popular-5.jpg" alt="Popular Tours" />
                     <div class="popular-tour-hover">
                        <ul>
                           <li><a href="#"><i class="fa fa-eye"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-heart-o"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-share-alt"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="popular-tour-desc">
                     <div class="tour-desc-top">
                        <h3><a href="tour-details.html">Venice Tour - Italy </a></h3>
                        <div class="tour_duration">
                           <p> <i class="fa fa-hourglass-half"></i>
                              3 days / 4 nights</p>
                        </div>
                        <div class="tour-desc-heading">
                           <div class="tour-rating">
                              <ul>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star-o"></i>
                                 </li>
                              </ul>
                           </div>
                           <div class="tour_feature"> <a href="#"><i class="fa fa-plane"></i></a>
                              <a href="#"><i class="fa fa-building-o"></i></a>
                              <a href="#"><i class="fa fa-cutlery"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tour-desc-bottom">
                        <div class="tour-details"> <a href="tour-details.html"><i class="fa fa-flag"></i> Book Now</a>
                        </div>
                        <div class="tour-desc-price">
                           <p>$980.00</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="single-popular-tour">
                  <div class="popular-tour-image">
                     <img src="assets/img/popular-6.jpg" alt="Popular Tours" />
                     <div class="popular-tour-hover">
                        <ul>
                           <li><a href="#"><i class="fa fa-eye"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-heart-o"></i></a>
                           </li>
                           <li><a href="#"><i class="fa fa-share-alt"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="popular-tour-desc">
                     <div class="tour-desc-top">
                        <h3><a href="tour-details.html">Super Maldives Trip</a></h3>
                        <div class="tour_duration">
                           <p> <i class="fa fa-hourglass-half"></i>
                              5 days / 6 nights</p>
                        </div>
                        <div class="tour-desc-heading">
                           <div class="tour-rating">
                              <ul>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star"></i>
                                 </li>
                                 <li><i class="fa fa-star-o"></i>
                                 </li>
                              </ul>
                           </div>
                           <div class="tour_feature"> <a href="#"><i class="fa fa-plane"></i></a>
                              <a href="#"><i class="fa fa-building-o"></i></a>
                              <a href="#"><i class="fa fa-cutlery"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="tour-desc-bottom">
                        <div class="tour-details"> <a href="tour-details.html"><i class="fa fa-flag"></i> Book Now</a>
                        </div>
                        <div class="tour-desc-price">
                           <p>$1020.00</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Popular Tours Area End -->
   <!-- Awesome Tour Area Start -->
   <section class="peulis-awesome-tour-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="awesome-tour-box">
                  <div class="video-btn">
                     <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"> <i class="flaticon-play-button"></i>
                     </a>
                  </div>
                  <h2>Go Ahead & Make Awesome Tour</h2>
                  <p>Discover hidden wonders on trips With Peulis</p> <a href="#" class="peulis-btn">Explore More <i class="fa fa-angle-double-right"></i> </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Awesome Tour Area End -->
   <!-- Destination Area Start -->
   <section class="peulis-destination-area section_70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="site-heading">
                  <h2>Destinations</h2>
                  <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="destination-slider owl-carousel">
                  <div class="single-destination">
                     <a href="destination-single.html">
                        <div class="destination-image">
                           <img src="assets/img/destination-1.jpg" alt="destination" />
                           <div class="destination-title">
                              <h3>Singapore</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="single-destination">
                     <a href="destination-single.html">
                        <div class="destination-image">
                           <img src="assets/img/destination-2.jpg" alt="destination" />
                           <div class="destination-title">
                              <h3>Florida</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="single-destination">
                     <a href="destination-single.html">
                        <div class="destination-image">
                           <img src="assets/img/destination-3.jpg" alt="destination" />
                           <div class="destination-title">
                              <h3>Portugal</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="single-destination">
                     <a href="destination-single.html">
                        <div class="destination-image">
                           <img src="assets/img/destination-4.jpg" alt="destination" />
                           <div class="destination-title">
                              <h3>France</h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Destination Area End -->
   <!-- Discount Area Start -->
   <section class="peulis-discount-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="discount-box">
                  <img class="discount_vector" src="assets/img/discount_single.png" alt="Travel Discount" />
                  <div id="container">
                     <div class="discount_desc" id="inner">
                        <h4>Travel Adventures</h4>
                        <h2>25% off</h2>
                        <p>Spend a best Holidays with us</p>
                        <div class="descount_btn">
                           <a href="#">
                              <img src="assets/img/appstore.png" alt="appstore" />
                           </a>
                           <a href="#">
                              <img src="assets/img/playstore.png" alt="playstore" />
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Discount Area End -->
   <!-- Choose Area Start -->
   <section class="peulis-choose-area section_70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="site-heading">
                  <h2>Why Peulis?</h2>
                  <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4">
               <div class="single-choose">
                  <p>01</p>
                  <div class="choose-image">
                     <img src="assets/img/choose-1.png" alt="Safe Travel" />
                  </div>
                  <div class="choose-desc">
                     <h3>Safe Travel</h3>
                     <p>printing and typesetting industry has been printing the industry’s ipsum</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="single-choose">
                  <p>02</p>
                  <div class="choose-image">
                     <img src="assets/img/choose-2.png" alt="Awesome Guide" />
                  </div>
                  <div class="choose-desc">
                     <h3>Awesome Guide</h3>
                     <p>printing and typesetting industry has been printing the industry’s ipsum</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="single-choose">
                  <p>03</p>
                  <div class="choose-image">
                     <img src="assets/img/choose-3.png" alt="Save Money" />
                  </div>
                  <div class="choose-desc">
                     <h3>Save Money</h3>
                     <p>printing and typesetting industry has been printing the industry’s ipsum</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Choose Area End -->
   <!-- Reviews Area Start -->
   <section class="peulis-reviews-area section_70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="reviews-slider owl-carousel">
                  <div class="single-reviews">
                     <div class="reviews-image">
                        <img src="assets/img/reviews-2.png" alt="reviews-1" />
                     </div>
                     <div class="reviews-text">
                        <div class="reviewer">
                           <h3>Luaka Smith</h3>
                        </div>
                        <p>"Dolor ipsum dolor sit amet, consectetuer adipiscing elit. Lorem commodo ligula eg dolor. Lorem Aenean msa. Cum sociis natoque"</p>
                     </div>
                  </div>
                  <div class="single-reviews">
                     <div class="reviews-image">
                        <img src="assets/img/reviews-1.png" alt="reviews-1" />
                     </div>
                     <div class="reviews-text">
                        <div class="reviewer">
                           <h3>joseph steve</h3>
                        </div>
                        <p>"Dolor ipsum dolor sit amet, consectetuer adipiscing elit. Lorem commodo ligula eg dolor. Lorem Aenean msa. Cum sociis natoque"</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Reviews Area End -->
   <!-- Blog Area Start -->
   <section class="peulis-blog-area section_70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="site-heading">
                  <h2>Latest Blog</h2>
                  <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="single-blog-item">
                  <div class="blog-image">
                     <a href="single-blog.html">
                        <img src="assets/img/blog-2.jpg" alt="blog" />
                     </a>
                  </div>
                  <div class="blog-desc">
                     <div class="post-meta">
                        <p class="date">20 feb, 2019</p>
                        <p>By <a href="#">Admin</a>
                        </p>
                        <p><a href="#">3 comments</a>
                        </p>
                     </div>
                     <h3><a href="single-blog.html">Tips To Reduce Your Travel Costs</a></h3>
                     <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration...</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="single-blog-item">
                  <div class="blog-image">
                     <a href="single-blog.html">
                        <img src="assets/img/blog-1.jpg" alt="blog" />
                     </a>
                  </div>
                  <div class="blog-desc">
                     <div class="post-meta">
                        <p class="date">20 feb, 2019</p>
                        <p>By <a href="#">Admin</a>
                        </p>
                        <p><a href="#">3 comments</a>
                        </p>
                     </div>
                     <h3><a href="single-blog.html">Your Card Processing Forms</a></h3>
                     <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration...</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Blog Area End -->
   <!-- Footer Area Start -->
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmk-LLrIU8jef2wsgV68Yz_tc1qmohh3g&libraries=places"></script>
   <script>
        function initialize() {
          var input = document.getElementById('searchTextField');
          var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('city2').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
   <?php include 'include/footer.php';?>