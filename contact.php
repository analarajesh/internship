<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wed");
if($db)
{
//echo "connected succesfully";
}
else{
echo "not connected";
}
?>

<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
if(isset($_POST['send']))
{
$nam=$_POST['name'];
$mail=$_POST['email'];
$contact=$_POST['cn'];
$address=$_POST['add'];
$msg=$_POST['subject'];
$sql="INSERT into sample3  values ('$nam','$mail','$contact','$address','$msg')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

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
  text-align:center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.hi{
margin:left;
padding:50px;
padding-bottom:1px;
}
.bye{
margin:right;
padding:20px;
padding-top:1px;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color:black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>

<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:cover" >

<h1 class="hi">Contacts</h1>

<div class="bye">
<h4><u>Address:</u></h4>
<p>Wedding planners</p>
 <p>Super Bazar</p>
 <p>Fisrt floor,Udupi</p>
 <p>Pin:576 101</p>

<h4><u>Email:</u></h4>
<p>xyz.123@gmail.com</p>

<h4><u>Contact no:</u></h4>
<p>8990076553</p>
<p>7889900335</p>
</div>
<button class="open-button" onclick="openForm()"><b>Open this</b></button>

<div class="form-popup" id="myForm">
  <form method="post" action="" class="form-container">
    <h1>Enquiry</h1>

<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="cn"><b>Contact</b></label>
    <input type="text" placeholder="Enter contact" name="cn" required>

<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="add" required>

    <textarea id="subject" name="subject" placeholder="Write a message" style="height:70px"></textarea>

    <button type="submit" class="btn" name="send">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

