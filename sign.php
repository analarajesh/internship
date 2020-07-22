<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wed");
if($db)
{
echo "connected succesfully";
}
else{
echo "not connected";
}
?>


<?php
session_start();
if (isset($_POST['submit']))
{
$name=$_POST['uname'];
$email=$_POST['umail'];
$phone=$_POST['uphone'];
$password=$_POST['psw'];
$confirm=$_POST['cpsw'];
 $sql="INSERT into s5 values('$name','$email','$phone','$password','$confirm')";
 $qry=mysqli_query($conn,$sql);
 if(!$qry)
echo mysqli_error($conn);
else
echo "Success";
header('Location: login.php');
}
?>

 

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
        function Validate() {
            var password = document.getElementById("psw").value;
            var confirmPassword = document.getElementById("cpsw").value;
            if (password != confirmPassword) {
                alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>

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
  background-color:#ddd;
  color: black;
}

mark{
background:white;
}

fieldset{
    background-color:white;
    filter:alpha(opacity=10);
    -moz-opacity:0.9;
    opacity:0.8;
    
}


</style>

<title>Sign</title>


</head>
<center>

<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:100% 100%" >

</center>
<center>
<form action=""  method="post">
  <div id="signup">
  <fieldset style="width:25%; height:70%;" ><legend><h1>Signup</h1></legend><br/><br/><br/>

<table border="0">

<tr>
   <td> <label for="uname"><b>Name</b></label></td>
    <td><input type="text" placeholder="Enter name" name="uname" id="uname" required><br/><br/></td>
</tr>

<tr>
   <td> <label for="uname"><b>Email</b></label></td>
    <td><input type="text" placeholder="Enter Email" name="umail" id="umail" required><br/><br/></td>
</tr>

<tr>
   <td> <label for="uname"><b>Phone</b></label></td>
    <td><input type="text" placeholder="Enter contact" name="uphone" id="uphone" required><br/><br/></td>
</tr>

<tr>
  <td> <label for="psw"><b>Password</b></label></td>
   <td> <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br/><br/></td>
</tr>

<tr>
<td><label for="psw"><b> Confirm Password</b></label></td>
   <td> <input type="password" placeholder="Enter Password" name="cpsw" id="cpsw" required ><br/><br/></td>
</tr>
</table>

    <button type="submit" name="submit" onclick="return Validate()" >Sign up</button>

   <button type="button" class="cancelbtn">Cancel</button><br/><br/>
   
<p><b><mark>Already Registered?</mark></b> <a href="login.php">Login here</a></p>
  </form>
</div>
</center>  



</body>
</html>
