<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wed");
if($db)
{
//echo "Connected Succesfully!";
}
else{
echo "Not Connected";
}
?>

<?php
//ini_set("display_errors",1);

$sql3="select id from sample order by id desc";
$result=mysqli_query($conn,$sql3);
$row=mysqli_fetch_array($result);
$id=$row['id']+1;

if(isset($_POST['book']))
{
$boy=$_POST['name1'];	
$girl=$_POST['name2'];
$venue=$_POST['ven'];
$guests=$_POST['guest'];
$date=$_POST['date'];
$address=$_POST['adr'];
$email=$_POST['email'];
$budget=$_POST['budget'];$boy=$_POST['name1'];

$cmnt=$_POST['comment'];
$sql="INSERT into sample (n1,n2,venue,guest,date,address,email,budget,comments) values ('$boy','$girl','$venue','$guests','$date','$address','$email','$budget','$cmnt')";

echo $id;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("Location:regs2.php?id=".$id);
	

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


//mysqli_close($conn);
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

button{
	
	padding: 15px 25px;
	
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
fieldset{
    background-color:white;
    filter:alpha(opacity=10);
    -moz-opacity:0.9;
    opacity:0.8;
    
}



</style>
<title>REGISTER</title>

</head>

<center>
<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:cover" >


<script language="javascript">
function load()
{
window.location.assign("reg2.php")
}
function call()
{
window.location.assign("start.php")
}


</script>


</center>
<center>

<fieldset style="width:50%; height:80%;"><legend><h1>Registration Form</h1></legend>
<table border="0">
<tr>
<form method="POST" action="">
<td><strong>Name of the boy</strong></td><td> <input type="text" name="name1" required></td>
</tr>
<tr>
<td><strong>Name of the girl</strong></td><td><input type="text"  name="name2" required></td>
<tr>
<td><strong>Venue</strong></td><td> <input type="text"  name="ven" required></td>
</tr>
<tr>
<td><strong>number of guests</strong></td><td> <input type="text"  name="guest" required></td>
</tr>

<tr>
<td><strong>Date of Event</strong></td><td> <input type="date"  name="date" required></td>
</tr>
<tr>
<td><strong>Address/Contact</strong></td><td> <textarea  name="adr" required></textarea></td>
</tr>
<tr>
<td><strong>Email Id </strong></td><td><input type="email" name="email" required></td>
</tr>
<tr>
<td><b>Budget Estimate</b></td>
<td>

<select name="budget" multiple  style="width:250px">
<option value="" selected> Select</option>
<option value="5lakhs">5 lakhs</option>
<option value="5-10lakhs">5-10 lakhs</option>
<option value="10-15lakhs">10-15 lakhs</option>
<option value="15-20lakhs">15-20 lakhs</option>
<option value="above 20lakhs">abv 20 lakhs</option>
</select>
</td>
</tr>
<tr>
<td><b><i>Comments</i></b></td><td><textarea  name="comment"></textarea></td>
</tr>
<tr>
<td align="left"><input id="button" type="submit" name="book" value="Book" ></td>
</tr>
<tr>
<td align="right"><input id="button" type="submit" name="submit"  value="Cancel"></td>
</tr>

<tr>
<td align="right"><input id="button" type="submit" name="submit"  value="Back" onClick="call()"></td>
</tr>



</form>
</table>
</fieldset>
</div>
</center>
</body>
</html>
