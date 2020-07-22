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
//ini_set("display_errors",1);

$sql3="select email from sample email";
$result=mysqli_query($conn,$sql3);
$row=mysqli_fetch_array($result);
$email=$row['email'];

if(isset($_POST['submit']))
{
	 $email=$_POST['email'];
     $phone=$_POST['psw'];
	 if($email!='')
 {
   $query=mysqli_query($conn,"select * from s5 where Email='".$email."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    //$_SESSION['email']=$email;
    //header('location:profile.php');
	header("Location:profile2.php?email=".$email);
   }
   else
   {
    echo "Entered Username and phone is incorect";
   }
 }
 else
 {
  echo'Enter both username';
 }

if (mysqli_query($conn, $sql3)) {
    echo "New record created successfully";
	header("Location:profile2.php?email=".$email);
	

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}


?>






<!--if (isset($_POST['submit'])){
        // removes backslashes
$email = stripslashes($_REQUEST['umail']);
        //escapes special characters in a string
$email = mysqli_real_escape_string($conn,$email);
$password = stripslashes($_REQUEST['psw']);
$password = mysqli_real_escape_string($conn,$password);
//Checking is user existing in the database or not
$email = trim($_POST['umail']);
    $password = trim($_POST['psw']);
        $query = "SELECT * FROM `my3` WHERE Email='$email'
and Password='".md5($password)."'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
$rows = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
        if($rows==1){
   $_SESSION['umail']=$row['umail'];
            // Redirect user to c2.php
   header("Location: c2.php");
}else{
echo 
"<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='c3.php'>Login</a></div>";
}
    }
?>


<!--extract($_POST);
$email=$_POST['umail'];
$password=$_POST['psw'];
$sql="INSERT into my values('$email','$password')";


$qry=mysqli_query($conn,$sql);
if(!$qry)
echo mysqli_error($conn);
else
echo "Success";
!-->




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

.a1{
position:absolute;
margin-top:5%;
margin-left:37%;
}


</style>
<title>EXISTING</title>
</head>

<center>

<body id="body-color"  style="background:url(g9.jpg); background-repeat:no-repeat;background-size:100% 100%">

<!--<div id="Register" class="topnav"><a href="#">

<a href="c7.php"><b>Home</b></a>
<a href="c6.php"><b>Services</b></a>
<a href="c10.php"><b>Sign-up</b></a>
<a href="c3.php"><b>Login</b></a>
<a href="a1.php"><b>Contact Us</b></a>
</div>!-->
<script>
function call()
{
window.location.assign("start.php")
}
</script>

<form action="" method="post">
  <div id="login">
<fieldset  style="width:25%; height:45%;" class="a1"><legend><h1>View Profile</h1></legend><br/><br/><br/>
  
  
   <label style="font-size:25px" for="uname"><b>Email Id</b></label>
   <input type="text" placeholder="Enter Email" name="email" id="umail" required><br/><br/>

    <button type="submit" name="submit" >Submit</button>
	
	<button type="button" class="btn" onClick="call()">Back</button><br/><br/>


    <button type="button" class="cancelbtn">Cancel</button>

    
</form>
</fieldset>

</center>
</div>

</body>
</html>







