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

/*$sql3="select id from sample order by id desc";
$result=mysqli_query($conn,$sql3);
$row=mysqli_fetch_array($result);
$id=$row['id'];*/
$id=$_GET['id'];
//ini_set("display_errors",1);
//error_reporting(E_ALL);
if(isset($_POST['b1']))
{
$function=$_POST['func'];
$vdecor=$_POST['vd'];
$gman=$_POST['gm'];
$other=$_POST['oe'];
$details=$_POST['message'];
$sql4="UPDATE sample SET  Function= '$function',VenueDecor='$vdecor',Guests='$gman',Others='$other',Specifications='$details' WHERE id = '$id'";
if (mysqli_query($conn, $sql4)) {
    //echo "New record created successfully";
	//header("Location:vprofile.php?id=".$id);
} else {
    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
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
<title>Register 2</title>
</head>
<center>

<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:cover" >

<div>

<form method="POST" action="">
<legend><b>REGISTER-Next</b></legend>
<table border="0" align="center" width="400" bgcolor="" >
<tr>
<th>Function Type</th>
<td>

<select name="func" multiple size="3" width=300 STYLE="width:250px" >
 <option value=" " selected>Select function</option>
 <option value="mehendi">Mehendi</option> 
 <option value="haldi">Haldi</option>
 <option value="engagement">Engagement</option> 
 <option value="wedding">Wedding</option> 
 </select>
</td>
</tr>

<tr> &nbsp; </tr>

<tr>
<th>venue decoration</th>
<td>
<select name="vd" multiple  width=300 STYLE="width:250px">
<option value=" " selected>Select decoration</option>
<option value="wedding theme">wedding theme</option>
<option value="stage decor">stage decor</option>
<option value="wedding cake">wedding cake</option>
<option value="tables">tables</option>
<option value="Enterance decor">Enterance decor</option>
</td>
</tr>
<tr> &nbsp; </tr>

<tr>
<th>Guest Management</th>
<td>
<select name="gm" multiple width=300 STYLE="width:250px">
<option value="" selected>Select</option>
<option value="Hosts/Anchoring"> Hosts/Anchoring</option>
<option value="Security/valet parking">Security/valet parking</option>
<option value="travel and stay arrangments">travel and stay arrangments</option>
</td>
</tr>
<tr> &nbsp; </tr>


<tr>
<th>other elements</th>
<td>
<select name="oe" multiple width=300 STYLE="width:250px">
<option value="" selected>Select</option>
<option value="wedding accessories">wedding accessories</option>
<option value="invitations">invitations</option>
<option value="photobooth">photobooth</option>
<option value="lightings">lightings</option>
</select>
</td>
</tr>
<tr> &nbsp; </tr>

<tr>
<th>specify details</th><td><textarea name="message"></textarea></td>
</tr>
<div>

<tr>
<td align="left"><input id="button" value="submit" type="submit" name="b1" onclick="show()" ></td>
</tr>

<tr>
<td align="right"><input id="button" value="Back" type="submit" name="b3" formaction="home.php" ></td>
</tr>

<tr>
<td align="right"><input id="button" value="View" type="submit" name="b3" formaction="vprofile.php" ></td>
</tr>

</div>

<script>
function show()
{
	alert("Submitted successfully");
}
</script>
</table>

		</div>
		</center>
		</form>
		</body>
		</html>