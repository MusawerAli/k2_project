<?php
///include "http://localhost/k2_project/html/header_footer/header.php";
require_once('../header_footer/header.php');
?>
<style>
.w3-bar-block .w3-bar-item {padding:20px}
.featured-title{
overflow:hidden;
}
.featured-title:after{
content:'';
display:inline-block;
width:80%; height:100%;
margin-right:-100%;
border-bottom:6px solid white;
}
</style>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px;margin-top:200px;"  width="1600" height="600" id="home">
  <img class="w3-image" src="../../assets/image/Website-design-32.png" style="width: 100%;" alt="Hamburger Catering">
  <!-- For Large Screen -->
  <div class="w3-display-right w3-hide-medium w3-hide-small w3-padding-large w3-border w3-wide w3-text-black w3-white w3-grayscale-max w3-opacity-min w3-center">
    <i><img src="http://localhost/k2_project/assets/image/logo1.png" height="50px" alt="Italian Trulli"></i><br>
    <i><img src="http://localhost/k2_project/assets/image/logo2.png" height="45px" alt="Italian Trulli"></i>
    <p class="">Pease contact us if you would <br>like to know more about the<br>services we offer.
    </p>
    <p>
      Telephone: +44 (0) 20 3123 4567 <br> Email: info@ennismoreestaes.com <br> Mobile: +44 (0) 7700 000000
    </p>
    <p>
      <b>ENNISMORE ESTATES</b> <br>412 EDGWARE ROAD <br> LONDON W2 1ED
    </p>
  </div>
  <!-- For Medium Screen -->
  <div class="w3-display-center w3-hide-large  w3-hide-small w3-padding-large w3-border w3-wide w3-text-black w3-white w3-grayscale-max w3-opacity-min w3-center">
    <i><img src="http://localhost/k2_project/assets/image/logo1.png" height="50px" alt="Italian Trulli"></i><br>
    <i><img src="http://localhost/k2_project/assets/image/logo2.png" height="45px" alt="Italian Trulli"></i>
    <p class="">Pease contact us for services we offer.
    </p>
    <p>
      Telephone: +44 (0) 20 3123 4567 <br> Email: info@ennismoreestaes.com
    </p>
    <p>
      <b>ENNISMORE ESTATES</b> <br>412 EDGWARE ROAD <br> LONDON W2 1ED
    </p>
  </div>
  
  <!-- For small Screen -->
  <div class="w3-display-left w3-hide-large  w3-hide-medium w3-padding-large w3-border w3-wide w3-text-black w3-white w3-grayscale-max w3-opacity-min w3-center">
    <i><img src="http://localhost/k2_project/assets/image/logo1.png" height="50px" alt="Italian Trulli"></i><br>
    <i><img src="http://localhost/k2_project/assets/image/logo2.png" height="45px" alt="Italian Trulli"></i>
    <p>
      Telephone: +44 (0) 20 3123 4567 <br> Email: info@ennismoreestaes.com
    </p>
  </div>
</header>
<hr>
<div class="w3-row-padding w3-grayscale" style="background-color: rgb(133, 116, 102);">
  <h1 class="featured-title w3-wide">Find US</h1>
  <div id="googleMap" style="width:100%;height:400px;"></div>
  
  
</div>
<script>
function myMap() {
var mapProp= {
center:new google.maps.LatLng(51.508742,-0.120850),
zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap">
</script>
<?php
//include "http://localhost/k2_project/html/header_footer/header.php";
require_once('../header_footer/footer.php');
?>