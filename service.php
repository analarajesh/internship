<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:;
}

.topnav a {
  float: left;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;
margin-top:10%;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding:1px;
  align-left:20px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius:100px;
  user-select: none;
}

.prev{
left:0;
border-radius:10px;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius:10px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color:red;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.text:hover{
background-color:;
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}

.container .btn {
  position:absolute;
  top:70%;
  left:90%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:black;
  color:red;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color:snow;
}




</style>

<title>SERVICES</title>
</head>
<center>
<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:cover" >

</center>
</body>
<body>
<center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="budget.jpg" style="width:80%">
  <div class="text"><b><p>Turn your wedding budget into a spending plan that works for you.</p><p>We will help you to set a realistic budget</p><p> according to your status and requirements and stick to it till the end.</p></b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="g5.jpg" style="width:70%">
  <div class="text"><b><p>Your wedding invitation gives glimpse at wedding theme</p><p>So make them count!!!!</p></b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="g1.jpg" style="width:80%">
  <div class="text"><b><p>We do far more than just prepare your wedding menu</p><p>We also supply tableware,stock the bar and bake the cake</p></b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="g2.jpg" style="width:70%">
  <div class="text"><b><p>Its amazing what a decoration can do</p><p>Our creative team brings you latest designs</p><p>Our stage designs are elegant</p></b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="g3.jpg" style="width:90%">
  <div class="text"><b><p>Not just video and photography we also provide DJ</p></b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="g4.jpg" style="width:80%">
  <div class="text"><b><p>Its your guest that will bring wedding to life</p><p>We offer best hospitality to your relatives during the wedding.</p></b></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)"> &#10095;</a>

</div>
</center>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


<div class="container">
<button type="button" class="btn" onClick="load()">Recent Projects</button><br/><br/>
</div>


<button type="button" class="btn" onClick="call()">Back</button><br/><br/>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
function load()
{
window.location.assign("project.php")
}
function call()
{
window.location.assign("start.php")
}


</script>


</style>
</body>
</html>
