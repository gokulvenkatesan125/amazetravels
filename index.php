<?php
 include 'include/header.php';
?>
<link rel="stylesheet" href="dist/wickedpicker.min.css">
<style type="text/css">
   #hid{
   margin-top: -25px;
   margin-left: 119px;
   }
   #hid1{
   margin-top: -25px;
   margin-left: 165px;
   }
   #hid2{
   margin-top: -25px;
   margin-left: 140px; 
   }
   #hidd2{
   margin-top: -25px;
   margin-left: 174px; 
   }
   #traveldate{
   margin-top: -25px;
   margin-left: 111px;
   }
   #passenger{
   margin-top: -25px;
   margin-left: 111px;
   }

   .container-map{
    width: 100%;
    height: 230px;
    margin: 1rem auto;
   }
</style>
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
      <div class="slider-container slider-3">
         <div class="single-slider zoom"></div>
      </div>
   </div>
   <div class="banner-area">
      <div class="banner-caption">
         <div class="container">
            <div class="row">
               <div class="col-md-7 col-sm-7 content-home">
                  <form  id="signup-form" class="form_cars">
                     <br>
                     <h2 id="get_taxi_bld "><b>Select Cab And Get Your Quote!</b></h2>
                     <div class="cars_label" >
                        <div class="dropdown" >
                           <label class="radio-inline cars_logo1"  id="cars_logo" onclick="one(1)" >
                              <input type="radio" class="radio1" id="lab1" name="colorRadio" value="sedan" required>
                              <img id="c1" width="80" height="29px" src="assets/img/car_logo_1.png">
                              <p style="color: black" id="bld_text_logo">Sedan</p>
                           </label>
                        </div>
                        <label class="radio-inline cars_logo3"  onclick="one(2)" id="cars_logo1">
                           <input type="radio" class="radio1" id="lab2" name="colorRadio" value="suv" required>
                           <img id="c3" width="80" height="29px" src="assets/img/car_logo_2.png">
                           <p style="color: black"id="bld_text_logo">Suv</p>
                        </label>
                        <label class="radio-inline cars_logo5" onclick="one(3)" id="cars_logo2">
                           <input type="radio" class="radio1" id="lab3" name="colorRadio" value="others" required>
                           <img id="c5" width="55" src="assets/img/car_logo_3.png">
                           <p style="color: black"id="bld_text_logo">Others</p>
                        </label>
                        <div class="sedan box">
                           <select id="select_hide"  >
                              <option value="" >Vehicle Type</option>
                              <?php
                                 $select_query = "SELECT * FROM local_tariff where vehicle_types='Sedan'";
                                 $select_result = mysqli_query($conn, $select_query);
                                 while($select_row = mysqli_fetch_assoc($select_result)){
                                 ?>
                              <option value="<?= $select_row['local_tariff_id']; ?>" > <?= $select_row['vehicles']; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="suv box">
                           <select  id="select_hide1" required>
                              <option value="" >Vehicle Type</option>
                              <?php
                                 $select_query = "SELECT * FROM local_tariff where vehicle_types='Suv'";
                                 $select_result = mysqli_query($conn, $select_query);
                                 while($select_row = mysqli_fetch_assoc($select_result)){
                                 ?>
                              <option value="<?= $select_row['local_tariff_id']; ?>" > <?= $select_row['vehicles']; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="others box">
                           <select  id="select_hide2" required>
                              <option value="">Vehicle Type</option>
                              <?php
                                 $select_query = "SELECT * FROM local_tariff where vehicle_types='Others'";
                                 $select_result = mysqli_query($conn, $select_query);
                                 while($select_row = mysqli_fetch_assoc($select_result)){
                                 ?>
                              <option value="<?= $select_row['local_tariff_id']; ?>" > <?= $select_row['vehicles']; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <!-- <p style="color: red; display: none" id="hide_p">Please select the vehicle type</p> -->
                     </div>
                     <ul class="nav nav-tabs carsTabs mt-2" role="tablist" >
                        <li class=" col-md-4 col-xs-4 nav-item first_nav_form" onclick="dont(11)"> 
                           <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                           <i class="fa fa-car" > </i>
                           <input type="hidden" id="station" value="outstation">
                           <span id="bld_text">Outstation</span>
                           </a>
                        </li>
                        <li class="col-md-4 col-xs-4  nav-item sec_nav_form" onclick="dont(22)" > 
                           <a class="nav-link" data-toggle="tab"  href="#tabs-2" role="tab">
                           <i class="fa fa-map-marker" id="mark"> </i>
                           <input type="hidden" id="station1" value="local">
                           <span  id="bld_text">Local</span>
                           </a>
                        </li>
                        <li class="col-md-4  col-xs-4 nav-item third_nav_form" onclick="dont(33)"> 
                           <a class="nav-link" data-toggle="tab"  href="#tabs-3" role="tab">
                           <i class="fa fa-plane" > </i>
                           <input type="hidden" id="station2" value="airport">
                           <span id="bld_text">Airport</span>
                           </a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                           <div class="form-content">
                              <br>
                              <div class="row">
                                 <div class="col-lg-6 one_way_media">
                                    <label id="one_way" class="radio-inline ">
                                    <input type="radio" id="way1" value="One Way" name="optradio1" required><b id="one_way_bld">One Way</b>
                                    </label>
                                 </div>
                                 <div class="col-lg-6 round_way_media">
                                    <label id="round_trip" class="radio-inline mb-2">
                                    <input type="radio" id="way2" value="Round Trip" name="optradio1" required><b id="two_way_bld">Round Trip</b>
                                    </label>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12  col-xs-2">
                                    <div class="form-group col-lg-12">
                                       <input class="form-control" id="pickup" type="text" placeholder="Enter Pickup Location" required="fill out" pattern="^[( )a-zA-Z-,-.]+$" required >
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group col-lg-12">
                                       <div class="input-group control-group after-add-more">
                                          <input type="text" id="drop" name="addmore[]" class="form-control dropLocation" placeholder="Enter Drop Location" required="fill out"   pattern="^[( )a-zA-Z-,-.]+$" required >
                                          <div class="input-group-btn">
                                             <button class="btn  add-more" id="add_btn" type="button"><i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                          </div>
                                       </div>
                                       <!-- Copy Fields -->
                                       <div class="copy hide" style="display: none;">
                                          <div class="control-group input-group" style="margin-top:10px">
                                             <input type="text" name="addmore[]" class="form-control dropLocation drop_address1" placeholder="Enter Drop Location" required="fill out">
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
                                       <input type="text" class="form-control" id="reservation_date1"  data-select="datepicker" placeholder="Start Date"  pattern="\d{1,2}/\d{1,2}/\d{4}"  required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group col-lg-12">
                                       <input type="text" class="form-control" id="reservation_date2" class="form-control" data-select="datepicker" placeholder="Return Date"  pattern="\d{1,2}/\d{1,2}/\d{4}"  required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6  col-xs-2">
                                    <div class="form-group col-lg-12">
                                       <div class="input-group clockpicker" data-autoclose="true">
                                          <input type="text" id="timepicker-12-hr" name="timepicker-12-hr" class="form-control timepicker-12-hr" required
                                             >                                       
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group col-lg-12">
                                       <input class="form-control" id="member" type="number" placeholder="Enter Members" required="fill out" >
                                    </div>
                                 </div>
                              </div>
                              <div class="row get_taxi_btn">
                                 <div class="col-lg-12 col-xs-2">
                                    <div class="form-group col-lg-12">
                                       <div>
                                          <div><button class="btn add-more1" onclick="gettaxi(); mapCalculate(); window.location.href='#myDIV'"><i class="fa fa-car"></i> Get Taxi</button>
                                             <br>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="tabs-2"  role="tabpanel">
                           <div class="form-content">
                              <br>
                              <div class="row">
                                 <div class="col-lg-12  col-xs-2">
                                    <div class="form-group col-lg-12">
                                       <input class="form-control" type="text" placeholder="Enter Pickup Location" name="pickup" id="pickup1"  pattern="^[( )a-zA-Z-,-.]+$" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12  col-xs-2">
                                    <div class="form-group col-lg-12">
                                       <input class="form-control" type="text" placeholder="Enter Drop Location" name="drop" required="fill out"  pattern="^[( )a-zA-Z-,-.]+$"  id="drop1">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6  col-xs-2">
                                    <div class="form-group col-lg-12">
                                       <div class="input-group clockpicker" data-autoclose="true">
                                          <input type="text" id="timepicker-12-hr1" name="time" class="form-control timepicker-12-hr"  required >
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group col-lg-12">
                                       <input class="form-control" type="number" name="member" placeholder="Enter Members" id="member2" required="fill out">
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="row">
                                 <div class="col-lg-12 col-xs-2">
                                    <div class="form-group col-lg-12">
                                       <div >
                                          <div c >
                                             <button class="btn" onclick="gettaxi(); mapCalculate1(); window.location.href='#myDIV'">
                                                <i class="fa fa-car"></i> Get Taxi</a>
                                                <br>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div class="form-content">
                        <div class="row">
                        <div class="col-lg-12  col-xs-2">
                        <div class="form-group col-lg-12">
                        <input class="form-control" type="text" placeholder="Enter Pickup Location" name="pickup" pattern="^[( )a-zA-Z-,-.]+$"  required id="pickup2">
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12  col-xs-2">
                        <div class="form-group col-lg-12">
                        <input class="form-control" type="text" placeholder="Enter Pickup Location" name="drop" pattern="^[( )a-zA-Z-,-.]+$"  required id="drop2">
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6  col-xs-2">
                        <div class="form-group col-lg-12">
                        <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="timepicker-12-hr" name="time" class="form-control timepicker-12-hr" required>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group col-lg-12">
                        <input class="form-control" type="number" name="member" placeholder="Enter Members"  id="member3" required>
                        </div>
                        </div>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-lg-12 col-xs-2">
                        <div class="form-group col-lg-12">
                        <div >
                        <div > 
                        <button class="btn" onclick="gettaxi(); mapCalculate2(); window.location.href='#myDIV'"><i class="fa fa-car"></i> Get Taxi</a>
                        <br>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <br>
                        </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-5 col-sm-5">
               <div class="banner-welcome">
               <h4 class="text">travel with us</h4>
               <div class="caption-inner">
               <div class="ah-headline"> <span class="typed-static">Enjoy</span>
               <span class="ah-words-wrapper">
               <b class="is-visible"> Tour</b>
               <b> pilgrimage</b>
               <b> nature</b>
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
<!-- Booking Information Starting -->
<div id="myDIV" style="background: url('assets/img/background_form.jpg')">
<div class="panel-group">
<div class="panel panel-default">
<div class="gmd gmd-5">
<div class="panel-body" >
<h3 class="form_hide_h">Booking information</h3>
<form id="form1" action="" method="post" >
<br>
<div class="row">
<div class="col-md-3 ">
<input type="hidden" id="label1" name="car_type" value="">
<input type="hidden" id="selecttab" name="vehicle_type" value="">
<input type="hidden" id="label2" name="station" value="">
<input type="hidden" id="ways" name="trip" value="">
<input type="hidden" id="pickuploc" name="pickup" value="">
<input type="hidden" id="droploc" name="drop" value="">
<input type="hidden" id="pickupdate" name="start_date" value="">
<input type="hidden" id="dropdate" name="return_date" value="">
<input type="hidden" id="selecttime" name="time" value="">
<input type="hidden" id="selectmember" name="member" value="">
<input type="text"  id="form_hide" class=" mb-3" placeholder="Name" name="name" required>
<input type="email"   id="form_hide" class=" mb-3" placeholder="Email" name="email" id="book_tabs" required>
<input type="text" class=" mb-3" id="form_hide" placeholder="Mobile number" name="mobile_number" pattern="[6-9]{1}[0-9]{9}" maxlength="10" title="Indian Mobile Number Only Accepted" required>
<textarea class=" mb-3"  rows="5" cols="15" name="address" placeholder="Drop address" id="form_hide" required></textarea>
</div>
<div class="col-md-3" >
<div style="background-color:white;" id="content_form">
<p>vehicle name:<span class="mr-3"></span><p id="hid"></p><p id="hid1"></p>
</p>
<p>Base fare:<span class="mr-5"></span>Rs.
<p id="hid2"> </p>
</p>
<p>Driver Beta:<span class="mr-4"></span>&nbsp;&nbsp; Rs. 300</p>
<br>
</div>
<br>
<img src="" height="100" id='hid3' width="300"><br><br>
</div>
<div class="col-md-3">
<div style="background-color:white;" id="content_form">
<p>
<div id="output" class="result-table"></div>
<input type="hidden" id="output1" name="distance" value="">
</p>
<p id="travel_date">Travel Date:<span class="mr-4"></span>
<p id="traveldate"></p></p>
<p>Passenger:<span class="mr-5"></span>  <p id="passenger"></p></p>
</div><br><br>
<div class="container-map" id="google-map"></div>
</div>
<div class="col-md-3">
<div style="background-color:white;" id="form_content1">
<center>
<p><b>Trip Estimation</b></p>
<p>
   <table>
      <tr>
         <td>Travel Amount:</td>
         <td id="travel_amount"></td>
      </tr>
      <tr>
         <td>GST 5% :</td>
         <td id="gst"></td>
      </tr>
      <tr>
         <td>Driver Beta:</td>
         <td id="">&nbsp;&nbsp;&nbsp;Rs.300.00</td>
      </tr>
      <tr>
         <td>Total Amount:</td>
         <td id="total_amount"></td>
      </tr>
   </table>
   <input type="hidden" id="total_amount1" name="total_amount" value="">
   <input type="hidden" id="total_amount2" name="total_amount2" value="">
</p>
<!-- <p id="travel_amount"></p>
<p id="gst"> </p>
<p id="total_amount"> </p> -->
<p class="mt-3"><b>Payment Method</b></p>
<label>
<input type="radio" class="mt-3 mb-3" id="idForm" name="payment" value="cod" required>&nbsp;Cod</label>&nbsp;&nbsp;<label><input type="radio" class="mt-3 mb-3" name="payment" value="online_payment" id="idForm"  required>&nbsp;Online Payment</label>
<br>
<button type="submit" class="btn1" name="submit" onclick="idForm()"><i class="fa fa-flag"></i> Book Now</button>
</center>
<br>
</div>
<div class="col-md-12">
<b>Note:</b>
<p style="color:red;">The actual bill amount might differ based on actual KMs travelled, hill-station charges, Toll charges & inter-state permibs etc.</p>
</div>
</div>
</div>
</div>
<br>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- booking Information Ending -->
<!-- tariff plan Start -->
<section id="form1" class="peulis-promo-package-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading mt-5">
               <h2>TARIFFS</h2>
               <p>Hire A Madurai Car Rental With Driver</p>
            </div>
            <justify>
               <p class="mt-2 mr-1">A historical city in the south of India, Madurai is a great place to visit with friends or family. Home to some of the greatest temples in this part of the country, the city has plenty of energy to keep you excited throughout your visit. Just hire a car on rent in Madurai and enjoy exploring the various corners of the city. It has plenty of fun things to do, so you’re in for a treat when you visit</p>
               <p class="mt-2">Rent a car in Madurai with <b>Amaze Travel Hub</b> & avoid of all the hassles of self-drive car rentals</p>
               <p class="mt-2">Once you get a local car on rent in Madurai, you can begin your journey by exploring the various parts of the city. You must start your trip with a visit to the historical Meenakshi Amman Kovil, which is an important religious site for many Hindus in the country. It has a sacred water tank, sculpted gate towers and more.</p>
               <p class="mt-2 mr-1">You &nbsp;could then head over Thirumalai Nayakkar Palace, which is a 17th Century palace erected by a legendary king. Your local car hire in Madurai with <b>Amaze Travel Hub</b> will help you navigate the roads and get you there on time, whenever you’re ready.</p>
               <p class="mt-2">The Gandhi Memorial Museum has various artifacts and exhibits pertaining to the Freedom movement of India.</p>
               <p class="mt-2">Why trust <b>Amaze Travel Hub</b> over any self drive car rental in Madurai?</p>
               <p class="mt-2"><b>Amaze Travel hub</b> provides local car rentals in Madurai that are properly managed and facilitated to provide the best for customers.</p>
               <br><br>
            </justify>
         </div>
      </div>
      <div class="row">
         <?php
            $tariff_query = "SELECT * FROM local_tariff";
            $tariff_result = mysqli_query($conn, $tariff_query);
            while($tariff_row = mysqli_fetch_assoc($tariff_result)){
            ?>
         <div class="col-md-4 col-sm-4 mb-5">
            <div class="pricingTable">
               <div class="pricingTable-header">
                  <h5 class="title"><img src="assets/img/<?php echo $tariff_row["car_img"]; ?>" class="img-responsive" alt="Cinque Terre" width="304" height="236"> </h5>
                  <h5 class="heading text-center"><?php echo $tariff_row["vehicles"]; ?></h5>
               </div>
               <div class="pricing-content">
                  <ul>
                     <li>
                        <center>SEATING: <?php echo $tariff_row["seating_passengers"]; ?> PASSENGERS</center>
                     </li>
                  </ul>
               </div>
               <span class="value">
                  <center style="font-size: 25px;">Rs.<?php echo $tariff_row["extra_cost_kms"]; ?>/km</center>
               </span>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
   </div>
</section>
<!-- Tariff plan End -->
<!-- Destination Area Start -->
<section class="peulis-destination-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="site-heading">
               <h2>Destinations</h2>
               <p>Hire Car Taxi In Madurai & Around</p>
            </div>
            <p><b>Contact: 0636 99 28 702</b></p>
            <p> For any kind of city transfers in Madurai. We provide outstation trip service and one-way drop service to nearby cities. Find out more details at Madurai Car Rentals.</p>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="destination-slider owl-carousel">
               <div class="single-destination">
                  <a href="madurai.php">
                     <div class="destination-image">
                        <img src="assets/img/madurai1.jpg" id="madurai_img"  alt="destination" />
                        <div class="destination-title">
                           <h3>Madurai</h3>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="single-destination">
                  <a href="chennai.php">
                     <div class="destination-image">
                        <img src="assets/img/chennai.jpeg" class="owl-carousel-img" height="340" alt="destination" />
                        <div class="destination-title">
                           <h3>Chennai</h3>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="single-destination">
                  <a href="trichy.php">
                     <div class="destination-image">
                        <img src="assets/img/trichy.jpg" class="owl-carousel-img" height="340" alt="destination" />
                        <div class="destination-title">
                           <h3>Trichy</h3>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="single-destination">
                  <a href="kochin.php">
                     <div class="destination-image">
                        <img src="assets/img/kochin.jpg" class="owl-carousel-img" height="340" alt="destination" />
                        <div class="destination-title">
                           <h3>Kochin</h3>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="single-destination">
                  <a href="trivandrum.php">
                     <div class="destination-image">
                        <img src="assets/img/kovalam.jpg" class="owl-carousel-img" height="340" alt="destination" />
                        <div class="destination-title">
                           <h3>Trivandram</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<br><br>
<!-- Destination Area End -->
<!-- Footer Area Start -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmk-LLrIU8jef2wsgV68Yz_tc1qmohh3g&libraries=places"></script>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<!-- Timepicker Js -->
<script src="dist/wickedpicker.min.js"></script>
<script>
   localStorage.setItem("outstation", 'set');
   localStorage.setItem("airport", 'notset');
   localStorage.setItem("local", 'notset');
   
   var select1;
   
   ///==========time picker =================//
   var twelveHour = $('.timepicker-12-hr').wickedpicker();
   $('.time').text('//JS Console: ' + twelveHour.wickedpicker('time'));
   $('.timepicker-24-hr').wickedpicker({
   twentyFour: true
   });
   $('.timepicker-12-hr-clearable').wickedpicker({
   clearable: true
   });
   
   
   ///==========time picker =================//
   
   
   ///===========function for set the value at the tariiffs=======///
   function one(type) {
   if (type == 1) {
   
   localStorage.setItem("sedan", 'set');
   localStorage.setItem("suv", 'notset');
   localStorage.setItem("others", 'notset');
   
   }
   if (type == 2) {
   
   localStorage.setItem("sedan", 'notset');
   localStorage.setItem("suv", 'set');
   localStorage.setItem("others", 'notset');
   
   }
   if (type == 3) {
   
   localStorage.setItem("sedan", 'notset');
   localStorage.setItem("suv", 'notset');
   localStorage.setItem("others", 'set');
   
   }
   select1 = false;
   
   }
   ///////==============end the function of tariff ===========//////////
   
   
   ///=========Start the validation of form and the hide or show the booking form=========///
   var kilometer;
   function gettaxi() {
   var x = document.getElementById("myDIV");
   // var para_hide = document.getElementById("hide_p");
   
   select1 = $("#select_hide").val();
   var select2 = $("#select_hide1").val();
   var select3 = $("#select_hide2").val();
   
   var member1 = document.getElementById("member").value;
   var member2 = document.getElementById("member2").value;
   var member3 = document.getElementById("member3").value;
   
   var pickup = document.getElementById('pickup').value;
   var drop = document.getElementById('drop').value;
   var date = document.getElementById('reservation_date1').value;
   var return_date = document.getElementById('reservation_date2').value;
   
   var pickup1 = document.getElementById('pickup1').value;
   var drop1 = document.getElementById('drop1').value;
   
   var pickup2 = document.getElementById('pickup2').value;
    var drop2 = document.getElementById('drop2').value;
   
   
   if ((member1 != "" && pickup != "" && drop != "" && date != "" && return_date != "") || (member2 != "" && pickup1 != "" && drop1 != "") || (member3 != "" && pickup2 != "" && drop2 != "")) {
   
   
   
   
   
                         
                      /////----end validation----------///
   
                      ///-----hide show the paragraph alert-----/////
   
                      var sedanCheck = localStorage.getItem("sedan");
                      var suvCheck = localStorage.getItem("suv");
                      var otherCheck = localStorage.getItem("others");
   
                     //  para_hide.style.display = "none";
                     //  if (suvCheck == 'set' && select2 == '') {
                     //     para_hide.style.display = "block";
                     //  }
   
                     //  if (otherCheck == 'set' && select3 == '') {
                     //     para_hide.style.display = "block";
   
                     //  }
   
                     //  if (sedanCheck == 'set' && select1 == '') {
                     //     para_hide.style.display = "block";
                     //  }
                      ///-----end------//////
   
   
                      ////-------get the sedan or suv or other ---------///
                      var d_label_value;
                      if (document.getElementById('lab1').checked) {
                         d_label_value = document.getElementById('lab1').value;
                      }
                      if (document.getElementById('lab2').checked) {
                         d_label_value = document.getElementById('lab2').value;
                      }
                      if (document.getElementById('lab3').checked) {
                         d_label_value = document.getElementById('lab3').value;
                      }
                      ////----------end-------------------/////
   
   
                      ///---------get the one way or round trip--------////     
                      var d_way;
                      if (document.getElementById('way1').checked) {
                         d_way = document.getElementById('way1').value;
                      }
                      if (document.getElementById('way2').checked) {
                         d_way = document.getElementById('way2').value;
                      }
   
   
                      ////--------------end the way-------////////
   
                      ///----get the select tab-----/////
                      var d_select_tab;
   
                      if (suvCheck == 'set' && sedanCheck != 'set' && otherCheck != 'set') {
                         var select2 = $("#select_hide1").val();
                         d_select_tab = select2;
   
                      }
   
                      if (otherCheck == 'set' && suvCheck != 'set' && sedanCheck != 'set') {
                         var select3 = $("#select_hide2").val();
                         d_select_tab = select3;
   
                      }
   
                      if (sedanCheck == 'set' && suvCheck != 'set' && otherCheck != 'set') {
                         select1 = $("#select_hide").val();
                         d_select_tab = select1;
   
                      }
                      ///---end--------///
   
   
                      /////-----declare the global variables for database-------/////
                      var d_station;
                      var d_pickup;
                      var d_drop;
                      var d_startdate;
                      var d_enddate;
                      var d_time;
                      var d_member;
                      //-----------end the declareation---------//////////
   
                      ////---check the staions actiove and get the values-----------////////
   
                      var outstationcheck = localStorage.getItem("outstation");
                      var localcheck = localStorage.getItem("local");
                      var airportcheck = localStorage.getItem("airport");
   
                      if (outstationcheck == 'set' && localcheck != 'set' && airportcheck != 'set') {
   
                         d_pickup = document.getElementById("pickup").value;
                         d_drop = document.getElementById('drop').value;
                         d_date = document.getElementById('reservation_date1').value;
                         d_return_date = document.getElementById('reservation_date2').value;
                         d_station = document.getElementById("station").value;
                         d_member = document.getElementById("member").value;
   
                         d_time = document.getElementById("timepicker-12-hr").value;
                      }
                      if (outstationcheck != 'set' && localcheck == 'set' && airportcheck != 'set') {
                         d_station = document.getElementById("station1").value;
                         d_member = document.getElementById("member2").value;
                        d_pickup = document.getElementById('pickup1').value;
                        d_drop = document.getElementById('drop1').value;
                        d_time = document.getElementById("timepicker-12-hr").value;
   
                      }
                      if (outstationcheck != 'set' && localcheck != 'set' && airportcheck == 'set') {
                         d_station = document.getElementById("station2").value;
                         d_pickup = document.getElementById('pickup2').value;
                         d_drop = document.getElementById('drop2').value;
                         d_member = document.getElementById('member3').value;
                         d_time = document.getElementById("timepicker-12-hr").value;
                      }
   
       
   
       
   // Returns successful data submission message when the entered information is stored in database.\
   
   if(outstationcheck == 'set' && localcheck != 'set' && airportcheck != 'set'){
   
   var dataString = console.log("car_type=" + d_label_value + "&vehicle_type=" + d_select_tab + "&station=" + d_station + "&trip=" + d_way + "&pickup=" + d_pickup + "&drop=" + d_drop + "&start_date=" + d_date + "&return_date=" + d_return_date + "&time=" + d_time + "&member=" + d_member);
        
   
   document.getElementById("label1").value=d_label_value;
   document.getElementById("selecttab").value=d_select_tab ;
   document.getElementById("label2").value=d_station;
   document.getElementById("ways").value=d_way;
   document.getElementById("pickuploc").value=d_pickup;
   document.getElementById("droploc").value=d_drop;
   
   document.getElementById("pickupdate").value=d_date;
     document.getElementById("traveldate").innerHTML=d_date;
   
   
   
   document.getElementById("dropdate").value=d_return_date;
     document.getElementById("selecttime").value=d_time;
       document.getElementById("selectmember").value=d_member;
       document.getElementById("passenger").innerHTML=d_member;
    }
   
   
   if(outstationcheck != 'set' && localcheck == 'set' && airportcheck != 'set'){
      var dataString1 = console.log("car_type=" + d_label_value + "&vehicle_type=" + d_select_tab + "&station=" + d_station + "&pickup=" + d_pickup + "&drop=" + d_drop  + "&member=" + d_member);
   
    document.getElementById("label1").value=d_label_value;
   document.getElementById("selecttab").value=d_select_tab ;
   document.getElementById("label2").value=d_station;
    
    document.getElementById("pickuploc").value=d_pickup;
   document.getElementById("droploc").value=d_drop;
   document.getElementById("selecttime").value=d_time;
    document.getElementById("selectmember").value=d_member;
          document.getElementById("passenger").innerHTML=d_member;
   }
   
   if(outstationcheck != 'set' && localcheck != 'set' && airportcheck == 'set'){
   
   var dataString2 = console.log("car_type=" + d_label_value + "&vehicle_type=" + d_select_tab + "&station=" + d_station + "&pickup=" + d_pickup + "&drop=" + d_drop  + "&member=" + d_member);
   
   
   
   
     document.getElementById("label1").value=d_label_value;
   document.getElementById("selecttab").value=d_select_tab ;
   document.getElementById("label2").value=d_station;
    document.getElementById("pickuploc").value=d_pickup;
   document.getElementById("droploc").value=d_drop;
   document.getElementById("selecttime").value=d_time;
   document.getElementById("selectmember").value=d_member;
   document.getElementById("passenger").innerHTML=d_member;
   }
   
       // if (x.style.display == "block") {
       //     x.style.display = "none";
       //  } else {
       //     x.style.display = "block";
       //  }
   
   
   $.ajax({
    type: "POST",
    url: "ajaxpage.php",
    data: {"select_tab":d_select_tab},
    success: function (result) {
        var obj=JSON.parse(result);
   
        document.getElementById("hid").innerHTML=obj.vehicle_types;
        document.getElementById("hid1").innerHTML='('+obj.vehicles+')';
        document.getElementById("hid2").innerHTML=obj.extra_cost_kms + " / 1Km";

       $("#hid3").attr("src","assets/img/"+obj.car_img);

      //calculation
     kilometer = obj.extra_cost_kms;

        if (x.style.display == "block") {
           x.style.display = "none";
        } else {
           x.style.display = "block";
           window.scrollTo(0, 1000);
        }
          }
   });
   
   var sel1 = $("#select_hide").val();
   var sel2 = $("#select_hide1").val();
   var sel3 = $("#select_hide2").val();
if(sel1=="" && sel2 == "" && sel3 == ""){
    window.alert('please select vehicle type');
}
   }
   }
   
   
   
   
   
   ///---------end the get values and assign the values to the vlobal variables-----///
   
   
   ///---end the validation of form and the hide or show the booking form---///
   
   
   //------------------show and hide the div content in booking information-----------//
   
   $('input[type="radio"]').click(function () {
   var inputValue = $(this).attr("value");
   var targetBox = $("." + inputValue);
   
   if (inputValue == "sedan" | inputValue == "suv" | inputValue == "others") {
   $(".box").not(targetBox).hide();
   $(targetBox).show();
   }
   
   });
   
   
   ///==================end the get taxi function=======================================////
   
   
   ///==============Show and hide the div============//////////
   
   function dont(type1) {
   var x = document.getElementById("myDIV");
   var travel_date = document.getElementById("travel_date");
   var traveldate = document.getElementById("traveldate");

   if (x.style.display == "block") {
   x.style.display = "none";
   }
   ///==============assign the local storage=============//////////
   if (type1 == 11) {
   
   localStorage.setItem("outstation", 'set');
   localStorage.setItem("local", 'notset');
   localStorage.setItem("airport", 'notset');
   travel_date.style.display = "block";
   traveldate.style.display = "block";
   
   }
   if (type1 == 22) {
   
   localStorage.setItem("outstation", 'notset');
   localStorage.setItem("local", 'set');
   localStorage.setItem("airport", 'notset');
   travel_date.style.display = "none";
   traveldate.style.display = "none";
   
   }
   if (type1 == 33) {
   
   localStorage.setItem("outstation", 'notset');
   localStorage.setItem("local", 'notset');
   localStorage.setItem("airport", 'set');
   travel_date.style.display = "none";
   traveldate.style.display = "none";
   
   }
   }
   ///================end the local storage===============//////////
   
   
   //=============show and hide the select tab in form============///
   // $(document).ready(function () {
   // $('#select_hide').on('change', function () {
   // if (this.value == '8' || this.value == '12' || this.value == '13') {
   //    $("#hide_p").hide();
   // } else {
   //    $("#hide_p").show();
   // }
   // });
   // $('#select_hide1').on('change', function () {
   // if (this.value == '9' || this.value == '10') {
   //    $("#hide_p").hide();
   // } else {
   //    $("#hide_p").show();
   // }
   // });
   // $('#select_hide2').on('change', function () {
   // if (this.value == '11') {
   //    $("#hide_p").hide();
   // } else {
   //    $("#hide_p").show();
   // }
   // });
   // });
   ////==============END=====================///                       
   
   $('.add-more1').click(function () {
   
   
   var dropLocation = [];
   $(".dropLocation").each(function () {
   dropLocation.push($(this).val());
   });
   console.log(dropLocation);
   
   })
</script>


<!-- map calculate start -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc30-M_Z1jCo6oawZq8StTfKrtbTPbhRM&libraries=places"></script>
<script>

// AIzaSyBSKYFIwr6SOCpsRrshG3gHFqfAyFecfNg
// AIzaSyAc30-M_Z1jCo6oawZq8StTfKrtbTPbhRM - key

// Create autocomplete objects for all inputs

var options = {
    types: ['(cities)']
}


var input1 = document.getElementById("pickup");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("drop");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);

var input3 = document.getElementById("pickup1");
var autocomplete3 = new google.maps.places.Autocomplete(input3, options);

var input4 = document.getElementById("drop1");
var autocomplete4 = new google.maps.places.Autocomplete(input4, options);

var input5 = document.getElementById("pickup2");
var autocomplete5 = new google.maps.places.Autocomplete(input5, options);

var input6 = document.getElementById("drop2");
var autocomplete6 = new google.maps.places.Autocomplete(input6, options);

var input7 = document.querySelectorAll(".drop_address1");
var autocomplete7 = new google.maps.places.Autocomplete(input7, options);


var myLatLng = { lat: 0.0, lng: 0.0 };
var mapOptions = {
    center: myLatLng,
    zoom: 1,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

// Hide result box
 document.getElementById("output").style.display = "none";

// Create/Init map
var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

// Create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

// Create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

// Bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);


// Define calcRoute function

var distance;

function mapCalculate() {
    //create request
    var request = {
        origin: document.getElementById("pickup").value,
        destination: document.getElementById("drop").value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC
    }

    // Routing
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Get distance and time            
            
            // $("#output").html("<div class='result-table' name='distance'>Distance: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + result.routes[0].legs[0].distance.text + "<br />Travel Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + result.routes[0].legs[0].duration.text + "</div>");

            // document.getElementById("output").style.display = "block";

            // var distance = result.routes[0].legs[0].distance.text;
            // $("#output1").attr("value",distance);


      distance = result.routes[0].legs[0].distance.text.toLowerCase().replace(" km", "").replace(',','');

       if ( distance > 0 && distance < 200)
        {
            distance = 200;
            $("#output").html("<div class='result-table'>Distance: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + distance + " km <br />Travel Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + result.routes[0].legs[0].duration.text + "</div>");
            $("#output1").attr("value",distance + " km");
            document.getElementById("output").style.display = "block";
        }
        else {
         $("#output").html("<div class='result-table' name='distance'>Distance: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + distance + " km <br />Travel Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + result.routes[0].legs[0].duration.text + "</div>");
         $("#output1").attr("value",distance + " km");
         document.getElementById("output").style.display = "block";
        }


        //amount calculation
        var travel_amount = kilometer * distance;
        console.log(travel_amount);
        var gst = (travel_amount * (5/100));
        console.log(gst);

        if(total_amount == NaN){
           alert("Api key is expired please try again later...");
        }
        else{
         var total_amount = travel_amount + gst + 300;
        }
        console.log(total_amount);
        
      //   document.getElementById("travel_amount").innerHTML= "Travel Amount: <b>Rs." + travel_amount.toFixed(2); + "</b>";
      //   document.getElementById("gst").innerHTML= "GST 5% : <b>Rs." + gst.toFixed(2); + "</b>";
      //   document.getElementById("total_amount").innerHTML="Total Amount: <b>Rs." + total_amount.toFixed(2); + "</b>";
      document.getElementById("travel_amount").innerHTML= "&nbsp;&nbsp;&nbsp;Rs." + travel_amount.toFixed(2);
        document.getElementById("gst").innerHTML= "&nbsp;&nbsp;&nbsp;Rs." + gst.toFixed(2);
        document.getElementById("total_amount").innerHTML="&nbsp;&nbsp;&nbsp;<b>Rs." + total_amount.toFixed(2); + "</b>";
        $("#total_amount1").attr("value","Rs." + total_amount.toFixed(2));
        $("#total_amount2").attr("value", total_amount.toFixed(2));
            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);

            //Show error message           
           
            // alert("Can't find road! Please try again!");
            clearRoute();
        }
    });

}


// Define calcRoute function
function mapCalculate1() {
    //create request
    var request = {
        origin: document.getElementById("pickup1").value,
        destination: document.getElementById("drop1").value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC
    }

    // Routing
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Get distance and time            
            distance = result.routes[0].legs[0].distance.text.toLowerCase().replace(" km", "").replace(',','');
            $("#output").html("<div class='result-table'>Distance: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + distance + " km<br />Travel Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + result.routes[0].legs[0].duration.text + "</div>");

            $("#output1").attr("value",distance + " km");
            document.getElementById("output").style.display = "block";

            //amount calculation
        var travel_amount = kilometer * distance;
        var gst = (travel_amount * (5/100));
        var total_amount = travel_amount + gst;
        
        document.getElementById("travel_amount").innerHTML= "&nbsp;&nbsp;&nbsp;Rs." + travel_amount.toFixed(2);
        document.getElementById("gst").innerHTML= "&nbsp;&nbsp;&nbsp;Rs." + gst.toFixed(2);
        document.getElementById("total_amount").innerHTML="&nbsp;&nbsp;&nbsp;<b>Rs." + total_amount.toFixed(2); + "</b>";
        $("#total_amount1").attr("value","Rs." + total_amount.toFixed(2));
        $("#total_amount2").attr("value", total_amount.toFixed(2));
            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);

            //Show error message           
           
            // alert("Can't find road! Please try again!");
            clearRoute();
        }
    });

}

// Define calcRoute function
function mapCalculate2() {
    //create request
    var request = {
        origin: document.getElementById("pickup2").value,
        destination: document.getElementById("drop2").value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC
    }

    // Routing
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Get distance and time            
            
           //Get distance and time            
           distance = result.routes[0].legs[0].distance.text.toLowerCase().replace(" km", "").replace(',','');
            $("#output").html("<div class='result-table'>Distance: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + distance + " km<br />Travel Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + result.routes[0].legs[0].duration.text + "</div>");

            $("#output1").attr("value",distance + " km");
            document.getElementById("output").style.display = "block";

            //amount calculation
        var travel_amount = kilometer * distance;
        var gst = (travel_amount * (5/100));
        var total_amount = travel_amount + gst;
        
        document.getElementById("travel_amount").innerHTML= "&nbsp;&nbsp;&nbsp;Rs." + travel_amount.toFixed(2);
        document.getElementById("gst").innerHTML= "&nbsp;&nbsp;&nbsp;Rs." + gst.toFixed(2);
        document.getElementById("total_amount").innerHTML="&nbsp;&nbsp;&nbsp;<b>Rs." + total_amount.toFixed(2); + "</b>";
        $("#total_amount1").attr("value","Rs." + total_amount.toFixed(2));
        $("#total_amount2").attr("value", total_amount.toFixed(2));
            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);

            //Show error message           
           
            // alert("Can't find road! Please try again!");
            clearRoute();
        }
    });

}


</script>

<!-- map calculate ending -->


<!-- payment redirect start -->
<script>
$('input[name=payment]').change(function() {
if($(this).val() == "cod") {
$('#form1').attr("action","insert_book.php");
} else if($(this).val() == "online_payment") {
$('#form1').attr("action","payment_gateway/payment.php");
}
});
</script>
<!-- payment redirect end -->
<?php include 'include/footer.php';?>