<!-- Footer -->
<div id="googleMap" style="width:100%;height:400px;"></div>
<hr style="height:3px;border:none;color:#333;background-color:#333;">
<footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
	<div class="col-sm-8">
		<div class="w3-row">
			<div class="w3-col m2  w3-center">
				<h5>Home</h5>
				
			</div>
			<div class="w3-col m2 w3-center">
				<h5>Services</h5>
				<p><a href="#">Services</a></p>
				<p><a href="#">Sales</a></p>
				<p><a href="#">Management</a></p>
				<p><a href="#">Find store</a></p>
				
				<p><a href="#">Help</a></p>
			</div>
			<div class="w3-col m2  w3-center">
				<h5>Properties</h5>
				
				<p><a href="#">For Sales</a></p>
				<p><a href="#">To lits</a></p>
				
			</div>
			<div class="w3-col m2  w3-center">
				
				<h5>About Us</h5>
				<p><a href="#">Our Teams</a></p>
				<p><a href="#">Our Projecct</a></p>
			</div>
			<div class="w3-col m2 w3-center">
				<h5>Contact Us</h5>
				<p><a href="#">Contact</a></p>
				<p><a href="#">Location</a></p>
			</div>
			<div class="w3-col m2 w3-purple w3-center">
				
			</div>
		</div>
		
	</div>
	
	<div class="col-sm-4">
		
	</div>
	
</footer>
<hr style="height:3px;border:none;color:#333;background-color:#333;">
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</body>
</html>