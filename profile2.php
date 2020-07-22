<?php include 'connect.php'; ?>
																																				

<?php

//error_reporting(E_ALL);
/*$email=$_GET['email'];
echo $email;
$query="SELECT * FROM sample where email='$email'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){

$n1=$row['n1'];
$n2=$row['n2'];
$venue=$row['venue'];
$guest=$row['guest'];
$date=$row['date'];
$address=$row['address'];
$budget=$row['budget'];
$Function=$row['Function'];
$VenueDecor=$row['VenueDecor'];
$Guest=$row['Guests'];
$Others=$row['Others'];
}
//$email=$row['email'];*/

?>




<html>
<head>
<title> display</title>
<style>
.table{
	margin-top:50px;
}
td,th{
	border: 2px solid black;
	text-align:left;
	padding:10px;
}
tr:nth-child(even){
	background-color:;
}
</style>
</head>
<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:cover" >
<script>
function call()
{
window.location.assign("start.php")
}
</script>

<div class="table responsive">

<table>
<center>
<legend><h1> Welcome to your profile</h1></legend>
</center>
<tr>
<th><strong>Name of the boy</strong></th>
<th><strong>Name of the girl</strong></th>
<th><strong>Venue</strong></th>
<th><strong>number of guests</strong></th>
<th><strong>Date of Event</strong></th>
<th><strong>Address/Contact</strong></th>
<!--<th><strong>Email Id</strong></th>-->
<th><strong>Budget Estimate</strong></th>
<th><strong>Comments</strong></th>
<th><strong>Function Type</strong></th>
<th><strong>Venue Decoration</strong></th>
<th><strong>Guest Management</strong></th>
<th><strong>Other Events</strong></th>
<th><strong>Details</strong></th> 
<th><strong>Edit Info</strong></th>  
<th><strong>Delete Info</strong></th>                
              
</tr>
<?php

//error_reporting(E_ALL);
$email=$_GET['email'];
echo $email;
$query="SELECT * FROM sample where email='$email'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
	?>

<tr>
<td> <?php echo $row[1];?></td>                                             												
<td><?php echo $row[2];?></td>
<td><?php echo $row[3];?></td>
<td><?php echo $row[4];?></td>
<td><?php echo $row[5];?></td>
<td><?php echo $row[6];?></td>
<!--<td><?php //echo $email;?></td>-->
<td><?php echo $row[8];?></td>
<td><?php echo $row[9];?></td>
<td><?php echo $row[10];?></td>
<td><?php echo $row[11];?></td>
<td><?php echo $row[12];?></td>
<td><?php echo $row[13];?></td>
<td><?php echo $row[14];?></td>
<td><a href="edit1.php?&id=<?php echo $row[0];?>">Edit</a></td>
<td><a href="delete.php?&id=<?php echo $row[0];?>">delete</a></td>
<?php
}

?>

</tr>
</table>
<a href="reg1.php">Add new data</a>
<button type="button" class="btn" onClick="call()">Back</button><br/><br/>
</body>
</html>
    
