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
