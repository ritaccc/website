<!-- MengxuanCai_Website
<?php
// Show all information, defaults to INFO_ALL
echo "<h1> ZoomInBeauty</h1><br>";
foreach (file("navigator.txt") as$line){
	$arr = explode(' ',trim($line));
	echo"<a href='$arr[0]'>{$arr[1]}</a><br>";
}
?> -->

<!DOCTYPE html>
<html>
<title>MengxuanCai_webSite</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mx.css">
<link rel="stylesheet" href="mxbn.css">
<link rel="stylesheet" href="mxsmall.css">
<link rel="stylesheet" href="font.css">
<style>
a{
  text-decoration: none;
}
html,body,h1,h2,h3,h4,h5 {font-family: "Lato", sans-serif}
.mySlides {display:none}
.mx-left, .mx-right, .mx-tag {cursor:pointer}
.mx-tag {height:15px;width:15px;padding:0;margin-top:6px}

.mx-content{max-width:980px;margin:auto}
.mx-navbar{list-style-type:none;margin:0;padding:0;overflow:hidden; background-color: #474747!important; color:white!important;}
.mx-navbar li{float:left}
.mx-navbar li a,
.mx-navitem{display:block;padding:8px 16px}

</style>
<body>

<!-- Navbar -->
<ul class="mx-navbar mx-left-align mx-light-grey mx-center mx-top mx-large">
  <li class="mx-left" style="width:20% !important"><a href="index.php" class="w3-text-teal">Home</a></li>
  <li class="mx-left" style="width:20% !important"><a href="news.php">News</a></li>
  <li class="mx-left" style="width:20% !important"><a href="product.php">Product</a></li>
  <li class="mx-left" style="width:20% !important"><a href="about.php">About</a></li>
  <li class="mx-left" style="width:20% !important"><a href="contact.php">Contact</a></li>

</ul>

<!-- Content -->
<div class="mx-content mx-container" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <div class="mx-section">
    <h1><b>ZoomInBeauty</b></h1>
    <p>By Mengxuan_Cai</p>
  </div>

  <!-- Slideshow -->
  <div class="mx-display-container mySlides">
    <img src="tatcha.jpg" style="width:100%">
    <div class="mx-display-topleft mx-text-white  mx-container mx-padding-32 mx-hide-small">
      <span class="mx-white mx-padding-large mx-animate-bottom">What I recommend</span>
    </div>
  </div>
  <div class="mx-display-container mySlides">
    <img src="facialMask.jpg" style="width:100%">
    <div class="mx-display-topright mx-text-white mx-container mx-padding-32 mx-hide-small">
      <span class="mx-white mx-padding-large mx-animate-bottom">facial mask needed every single day</span>
    </div>
  </div>
  <div class="mx-display-container mySlides">
    <img src="makeup.png" style="width:100%">
    <div class="mx-display-topright mx-text-white mx-container mx-padding-32 mx-hide-small">
      <span class="mx-white mx-padding-large mx-animate-bottom">THIS IS WHY YOU NEED MAKEUP</span>
    </div>
  </div>

  <!-- Slideshow next/previous buttons -->
  <div class="mx-container mx-dark-grey mx-padding-8 mx-xlarge">
    <div class="mx-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left mx-hover-text-teal "></i></div>
    <div class="mx-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right mx-hover-text-teal"></i></div>
    
    <div class="mx-center">
      <span class="mx-tag demodots mx-border mx-transparent mx-hover-white" onclick="currentDiv(1)"></span>
      <span class="mx-tag demodots mx-border mx-transparent mx-hover-white" onclick="currentDiv(2)"></span>
      <span class="mx-tag demodots mx-border mx-transparent mx-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>



  <!-- Contact -->
  <div class="mx-center mx-padding-64">
    <span class="mx-xlarge mx-bottombar mx-border-dark-grey mx-padding-16">Contact Us</span>
  </div>

  <form>
    <div class="mx-group">
      <label>Name</label>
      <input class="mx-input mx-border mx-hover-border-black" style="width:100%;" type="text">
    </div>
    <div class="mx-group">
      <label>Subject</label>
      <input class="mx-input mx-border mx-hover-border-black" style="width:100%;" type="text">
    </div>
    <div class="mx-group">
      <label>Email</label>
      <input class="mx-input mx-border mx-hover-border-black" style="width:100%;">
    </div>
    <button type="button" class="mx-btn mx-btn-block mx-padding-12">Send</button>
  </form>

</div>

<!-- Footer -->
<footer class="mx-container mx-padding-32 mx-light-grey mx-center">
  <h4></h4>
  <p>cmpe272</p>
</footer>

<script>
// Slideshow script
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" mx-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " mx-white";
}
</script>

</body>
</html>
