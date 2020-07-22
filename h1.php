<!DOCTYPE html>
<html>

<head>
<title>home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: center;
  text-align: center;
  color: black;
}
.mySlides {
	display: none;
	margin-left:30%;
	}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
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
</style>

</head>

<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:cover" >

<div class="container" style="max-width:500px">
  <img class="mySlides" src="ana1.jpg" style="width:200%">
  <h1 class="centered"><p>EVENT MANAGEMENT <br/>
  we design professional seamless weddings</p></h1>

  <img class="mySlides" src="ana2.jpg" style="width:190%;height:50%;">
  <img class="mySlides" src="ana3.jpg" style="width:200%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

function call()
{
window.location.assign("start.php")
}
</script>
<button type="button" class="btn" onClick="call()">Back</button><br/><br/>


</body>
</html>
