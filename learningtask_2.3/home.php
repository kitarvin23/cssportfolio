<div id="content">
<img src="images/home-bg.jpg" alt="intro" width="1350" height="auto">
</div>

<!-- animation logo -->
<div class="logowew">
        <div class="cup ">
          <div class="logo"></div>
          </div>
      </div>
<!-- animation logo -->

<a class="fb" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155"><img src="images/facebook.png" alt="icon" height="20" width="20"></a>
<a class="tw" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155"><img src="images/twitter.png" alt="icon" height="20" width="20"></a>
<a class="ins" href="https://www.facebook.com/pages/Le-Vape-Cafe/585242891871155"><img src="images/instagram.png" alt="icon" height="20" width="20"></a>

<div id="content2"></div>

<img id="img1-home" src="images/home-img-5.JPG" alt="LE VAPE CAFE , ENTRANCE" width="420">

<!-- Modal -->
<div id="homeModal1" class="home-modal-1">
  <span class="close1"></span>
  <img class="modal-content-home1" id="img01">
  <div id="caption-home1"></div>
</div>
<div class="text1-bold"><h1>WELCOME<h1><hr class="new1"></div>
<div class="text1">
<p><i>We want to be a welcoming,
 comforting presence in every community we serve and anywhere else we happen to show up. 
 We know our guests have a choice — and we never want them to feel less than special.</p> 
</div>


<img id="img2-home" src="images/home.png" alt="LE VAPE CAFE , INSIDE" width="420">

<!-- Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img02">
  <div id="caption-home2"></div>
</div>

<div class="text2-bold"><h2>COFFEE & CLOUDS</h2></div>
<div class="text2">
<p><i>In search for a coffee shop near you?
or coffee shop with vaping area?
Stop by Levape cafe located at Door 1,
2nd floor Old State Theatre Building
Gatuslao St, Bacolod City, Negros Occ.</p> 


</div>

<script>
// IMAGE 1
// Get the modal
var modal = document.getElementById('homeModal1');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('img1-home');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>


<script>
// IMAGE 2
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('img2-home');
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption-home2");
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
