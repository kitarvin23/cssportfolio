<?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$prod = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/stylewew.css">
<link rel="stylesheet" type="text/css" href="css/style-footer.css">
<link rel="stylesheet" type="text/css" href="css/styleheader.css">
<link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <title>Levape Cafe</title>
</head>
<body>

<div id="navbar">
  <a href="index.php?page=home" id="logo" class="btn-semi" >Levape Cafe</a>
 
  <!-- animation logo -->
<div class="logowew">
        <div class="cup ">
          <div class="logo"></div>
          </div>
      </div>
<!-- animation logo -->

</div>




<div id="footer">
<div class="Daily-events-box"></div>

<!-- animation circles -->
<div class="circle">
    <div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
<div class="relaxing"></div>
</div>
<!-- animation circles -->

<div class="Daily-events"><h4><i>Daily Events</h4></div>


<!-- Daily Events 1 -->
<div class="footer-text1"><i><h4> 1st Anniversary of Le Vape Cafe</h4>
<p>Last August 17, 2019</p>
</div>
<!-- Daily Events 1 -->


<!-- Daily Events 2 -->

<div class="footer-text2"><i><h4> T-Shirt is now available at Levape Cafe</h4>
<p> T-Shirt  for only 200 Php</p></div>

<!-- Daily Events 2 -->


<!-- Daily Events 3 -->

<div class="footer-text3"><i><h4> First 10 customers</h4>
<p> on December 20, 2019 will</p>
<p>be given a Le Vape cup</p>
</div>


<!-- Daily Events 3 -->



<div class="contact">Contact Us</div>
 
<textarea id="subject" class="contact-us" name="subject" placeholder="Write something.." style="height: 450px;" ></textarea>
  <input type="send" value="send">
 
<div class="v1"></div>


<!-- Insta pure css -->
<a class="insta-footer" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155">
<div class="insta">
  <div class="shape"></div>
</div></a>
<!-- Insta pure css -->

<!-- fb pure css -->
<div class="fb-footer">
<div class="fb">
  <div class="facebook fbpos"><a class="fbanchor" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155">F</a></div>
</div></div>
<!-- fb pure css -->

<!-- twitter pure css -->
<div class="tw-footer">
<div class="tw">
  <div class="twitter twpos"><a class="twanchor" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155">T</a></div>
</div></div>
<!-- twitter pure css -->

<!-- animation logo -->
<div class="logo2">
        <div class="cupfoot">
          <div class="logofoot"></div>
          </div>
      </div>
<!-- animation logo -->

</div>

<script>
// NAVIGATION TAB

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>

<?php
switch ($load) {
  
  default:
    include('home.php');
    break;
}
 ?>


</body>
</html>
