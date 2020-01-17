<!-- header section starting -->

<?php include 'include/header.php';?>
<style>
    body{
        overflow-x: hidden;
        background-color:#f1f1f2;
    }
</style>
<!-- header section ending -->


<!-- Content starting -->
<div class="tile" id="tile-1">

<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified" role="tablist">
  <div class="slider"></div>
   <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">OUT STATION TARIFF</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LOCAL TARIFF</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-map-signs"></i> Contact</a>
    </li>
  <li class="nav-item">
      <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false"><i class="fas fa-cogs"></i> Settings</a>
    </li> -->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

  <table class="table table-responsive-sm table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="km text-center">Km's</th>
      <th scope="col" class="text-center">Dzire (A/C)</th>
      <th scope="col" class="text-center">Etios (A/C)</th>
      <th scope="col" class="text-center">Innova (A/C)</th>
      <th scope="col" class="text-center">Innova Crysta (A/C)</th>
      <th scope="col" class="text-center">Force Tempo (A/C)</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>225/Minimum</td>
      <td>2362.5</td>
      <td>2362.5</td>
      <td>—</td>
      <td>—</td>
      <td>—</td>
    </tr>
    <tr class="text-center">
      <td>250/Minimum</td>
      <td>2625</td>
      <td>2625</td>
      <td>3375</td>
      <td>—</td>
      <td>—</td>
    </tr>
    <tr class="text-center">
      <td>300/Minimum</td>
      <td>3150</td>
      <td>3150</td>
      <td>4050</td>
      <td>5250</td>
      <td>5250</td>
    </tr>
    
  </tbody>
</table>




  </div>

 
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

<table class="table table-responsive-sm table-bordered">
  <thead class="thead-dark">
    <tr>
    <th scope="col" class="cab text-center">Vehicle's</th>
      <th scope="col" class="text-center">8Hrs/80Kms</th>
      <th scope="col" class="text-center">12Hrs/120Kms</th>
      <th scope="col" class="text-center">Extra cost/Hr</th>
      <th scope="col" class="text-center">Extra cost/Kms</th>
    </tr>
  </thead>
  <tbody>
  <tr class="text-center">
      <td>DZIRE</td>
      <td>1960</td>
      <td>2240</td>
      <td>150</td>
      <td>10.5</td>
    </tr>
    <tr class="text-center">
      <td>ETIOS</td>
      <td>1960</td>
      <td>2240</td>
      <td>150</td>
      <td>10.5</td>
    </tr>
    <tr class="text-center">
      <td>INNOVA</td>
      <td>2580</td>
      <td>2920</td>
      <td>200</td>
      <td>13.5</td>
    </tr>
    <tr class="text-center">
      <td>INNOVA CRYSTA</td>
      <td>3400</td>
      <td>3900</td>
      <td>250</td>
      <td>17.5</td>
    </tr>
    <tr class="text-center">
      <td>FORCE TEMPO</td>
      <td>3260</td>
      <td>3740</td>
      <td>300</td>
      <td>17.5</td>
    </tr>
  </tbody>
</table>
</table>




  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br>
<!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Contact</div>
<div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">Settings</div> -->
</div>

</div>

<!-- content ending -->



<!-- footer section starting -->
<?php include 'include/footer.php';?>
<!-- footer section ending -->

<script>
    $("#tile-1 .nav-tabs a").click(function() {
  var position = $(this).parent().position();
  var width = $(this).parent().width();
    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});

</script>