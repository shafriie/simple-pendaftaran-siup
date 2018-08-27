<!DOCTYPE html>
<html>
<head>
  <title>Sistem Informasi Pendaftaran SIUP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
ul{
  list-style-type:none;
  margin:0;
  padding:0;
  width:100%;
  background-color:#0f303f;
  font-family:sans-serif;
  border:1px solid #ccc;
  overflow:hidden;
  
}
li{
  float:left;
}
li a{
  display:block;
  text-decoration:none;
  color:#fff;
  padding:14px 16px;
  text-align:center;
}

li a:hover{
  background-color:#555;
  color:#fff;
}
li.active a{
  background:#4169e1;
  color:#fff;
}
li.right{
  float:right;
}
li.center{
	float: left;
}
ul.fixed-top{
    position: fixed;
    top: 0;
}
ul.fixed-bottom{
    position: fixed;
    bottom: 0;
}
</style>
</head>
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="asset/bootstrap.min.css">

<!-- jQuery library -->
<script src="asset/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="asset/bootstrap.min.js"></script>

<?php include 'layout/header.php'; ?>


<div class="container">


<h2 class="page-header">Beranda</h2>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slide1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slide2.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</body>
</html> 