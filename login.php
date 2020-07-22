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
session_start();

if (isset($_POST['login']))
{
//mysqli_connect('localhost','root','') or die(mysqli_error());
     //mysqli_select_db('wedding') or die(mysqli_error());
     $email=$_POST['uname'];
     $password=$_POST['psw'];
if($email!=''&&$password!='')
 {
   $query=mysqli_query($conn,"select * from s5 where Email='".$email."' and Password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['umail']=$email;
    header('location:start.php');
   }
   else
   {
    echo "Entered email and password is incorect";
   }
 }
 else
 {
  echo'Enter both email and password';
 }
}
?>


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
mark{
	background:white;
	color:black;
}


  

</style>
<title>LOGIN</title>
</head>
<body>
<center>
<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:cover" >

<form action="" method="post">
  <div id="login">
<fieldset style="width:25%; height:55%;" ><legend><h1>LOGIN</h1></legend><br/><br/><br/>
  
    <label for="uname"><b>Email Id</b></label>
    <input type="text" placeholder="Enter Email" name="uname" required><br/><br/>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br/><br/>

    <button type="submit" name="login"  onClick="load()">Login</button>

	<script language="javascript">
function load()
{
	
window.location.assign("start.php")
}
</script>

    <button type="button" class="cancelbtn" >Cancel</button><br/><br/>
	 <p><mark>new user?</mark><a href="sign.php">Sign up</a></p>
   
</form>
</div>
</center>
</fieldset>
</body>
</html>







