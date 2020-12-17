<?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$prod = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/stylewew.css">
<link rel="stylesheet" type="text/css" href="css/style-footer.css">
  <title>Levape Cafe</title>
</head>
<body>

<div id="navbar">
  <a href="index.php?page=home" id="logo">Levape Cafe</a>
  <div id="navbar-right">
    <a class="active" href="index.php?page=home">Home</a>
	<a href="index.php?page=menu">Menu</a>
    <a href="index.php?page=about">About</a>
    <a href="index.php?page=events">Events</a>
    <a href="index.php?page=contact">Contact</a>
  </div>
</div>


<div id="footer">
<div class="Daily-events-box"></div>
<div class="Daily-events"><h4><i>Daily Events</h4></div>

<img id="img1-footer" src="images/daily1.JPG" alt="1st Anniversary of Le Vape Cafe" width="150" height="150">

<!-- Modal -->
<div id="footerModal" class="modal">
  <span class="close-footer1">×</span>
  <img class="modal-content" id="img03">
  <div id="caption-footer1"></div>
</div>
<div class="footer-text1"><i><h4> 1st Anniversary of Le Vape Cafe</h4>
<p>Last August 17, 2019</p>
</div>


<img id="img2-footer" src="images/daily2.JPG" alt="LE VAPE CAFE T-SHIRT" width="150" height="150">

<!-- Modal -->
<div id="footerModal" class="modal">
  <span class="close-footer2">×</span>
  <img class="modal-content" id="img04">
  <div id="caption-footer2"></div>
</div>
<div class="footer-text2"><i><h4> This is now available at</h4>
<p> Le Vape Cafe for only 200 Php</p></div>


<img id="img3-footer" src="images/123.JPG" alt="FREEBIES" width="150" height="150">

<!-- Modal -->
<div id="footerModal" class="modal">
  <span class="close-footer3">×</span>
  <img class="modal-content" id="img05">
  <div id="caption-footer3"></div>
</div>
<div class="footer-text3"><i><h4> First 10 customers</h4>
<p> on December 20, 2019 will</p>
<p>be given a Le Vape cup</p>
</div>


<div class="contact">Contact Us</div>
 
<textarea id="subject" class="contact-us" name="subject" placeholder="Write something.." style="height: 450px;" ></textarea>
  <input type="send" value="send">
 
<div class="v1"></div>



<a class="fb-footer" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155"><img src="images/facebook.png" alt="icon" height="30" width="30"></a>
<a class="tw-footer" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155"><img src="images/twitter.png" alt="icon" height="30" width="30"></a>
<a class="ins-footer" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155"><img src="images/instagram.png" alt="icon" height="30" width="30"></a>
<!-- animation logo -->
<div class="logo2">
        <div class="cupfoot">
          <div class="logofoot"></div>
          </div>
      </div>
<!-- animation logo -->

</div>

<script>
// IMAGE 1 - footer
// Get the modal
var modal = document.getElementById('footerModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('img1-footer');
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption-footer1");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<script>
// IMAGE 2 - footer
// Get the modal
var modal = document.getElementById('footerModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('img2-footer');
var modalImg = document.getElementById("img04");
var captionText = document.getElementById("caption-footer2");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<script>
// IMAGE 3 - footer
// Get the modal
var modal = document.getElementById('footerModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('img3-footer');
var modalImg = document.getElementById("img05");
var captionText = document.getElementById("caption-footer3");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<script>
// NAVIGATION TAB

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>

<?php
switch ($load) {
  case 'menu':
    include('home.php');
    break;
  case 'about':
      include('home.php');
      break;
  case 'events':
          include('home.php');
          break;
  case 'contact':
          include('home.php');
          break;
  default:
    include('home.php');
    break;
}
 ?>


</body>
</html>
