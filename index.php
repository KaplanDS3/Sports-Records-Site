<html><title>School Athletic Records</title>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>
<div id="home">
	<p>All the information you need to know about the athletic records set in sports events during the school's history in a simple and effective format!</p>
</div>
<div id="home">
<div id="stage">
	<img src="home_img1.jpg" width="460" height="300">
	<img src="home_img2.jpg" width="460" height="300">
	<img src="home_img3.jpg" width="460" height="300">
	<img src="home_img4.jpg" width="460" height="300">
</div>
</div>

<script>
window.addEventListener("DOMContentLoaded", function(e) {

// Original JavaScript code by Chirp Internet: chirpinternet.eu
// Please acknowledge use of this code by including this header.

var stage = document.getElementById("stage");
var fadeComplete = function(e) { stage.appendChild(arr[0]); };
var arr = stage.getElementsByTagName("img");
for(var i=0; i < arr.length; i++) {
  arr[i].addEventListener("animationend", fadeComplete, false);
}

}, false);

</script>

<?php
include 'footer.php';
?>
</html>