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
 $id = $_GET['id'];
if(isset($_POST['submit']))
{    
    $boy=$_POST['name1'];
    $girl=$_POST['name2'];
    $venue=$_POST ['ven'];
	$guests=$_POST ['guest'];
    $date=$_POST ['date'];
    $address=$_POST ['adr'];
    $email=$_POST ['email'];
    $budget=$_POST ['budget'];
    $cmnt=$_POST ['comment'];
     $function=$_POST ['func'];
    $vdecor=$_POST ['vd'];
    $gman=$_POST ['gm'];
    $other=$_POST ['oe'];
    $details=$_POST ['message'];
	

    
       $result = mysqli_query($conn, "UPDATE sample SET n1='$boy',n2='$girl',venue='$venue',guest=$guests,date='$date',address='$address',email='$email',budget='$budget',comments='$cmnt',Function='$function',VenueDecor='$vdecor',Guests='$gman',Others='$other',Specifications='$details' WHERE id='$id'");
        echo mysqli_error($conn);
		if($result)
		{
        //redirectig to the display page. In our case, it is index.php
      header("Location: profile2.php?email=$email");
		}
		else{
			echo "not updated";
		}
    
}
?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM sample WHERE id='$id'");
 
while($res = mysqli_fetch_array($result))
{
    $boy=$res['n1'];
    $girl=$res['n2'];
    $venue=$res['venue'];
	$guests=$res['guest'];
    $date=$res['date'];
    $address=$res['address'];
    $email=$res['email'];
    $budget=$res['budget'];
    $cmnt=$res['comments'];
    $function=$res['Function'];
    $vdecor=$res['VenueDecor'];
    $gman=$res['Guests'];
    $other=$res['Others'];
    $details=$res['Specifications'];

    //header("Location:edit.php?email=".$email);
}

?>



<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body id="body-color" style="background:url(g9.jpg); background-repeat:no-repeat;background-size:100% 100%" >

  <!--  <a href="search.php">Home</a>-->
    <br/><br/>
    
    <form name="form1" method="post" action="">
<center>
<fieldset style="width:50%; height:80%;"><legend><h1>EDIT</h1></legend>

        <table border="0">
            <tr> 
                <td>Name of the BOY</td>
                <td><input type="text" name="name1" value="<?php echo $boy;?>"></td>
            </tr>
            <tr> 
                <td>Name of the GIRL</td>
                <td><input type="text" name="name2" value="<?php echo $girl;?>"></td>
            </tr>
            <tr> 
                <td>Venue</td>
                <td><input type="text" name="ven" value="<?php echo $venue;?>"></td>
            </tr>
			<tr> 
                <td>No of Guests</td>
                <td><input type="text" name="guest" value="<?php echo $guests;?>"></td>
            </tr>
<tr> 
                <td>Date of Event</td>
                <td><input type="text" name="date" value="<?php echo $date;?>"></td>
            </tr>
<tr> 
                <td>Address/Contact</td>
                <td><input type="text" name="adr" value="<?php echo $address;?>"></td>
            </tr>
<tr> 
                <td>Email Id</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
             <tr> 
                <td>Budget Estimate</td>
                <td><input type="text" name="budget" value="<?php echo $budget;?>"></td>
            </tr>
<tr> 
                <td>Comments</td>
                <td><input type="text" name="comment" value="<?php echo $cmnt;?>"></td>
            </tr>
<tr> 
                <td>Functions</td>
                <td><input type="text" name="func" value="<?php echo $function;?>"></td>
            </tr>
<tr> 
                <td>Venue Decoration</td>
                <td><input type="text" name="vd" value="<?php echo $vdecor;?>"></td>
            </tr>
<tr> 
                <td>Guest Management</td>
                <td><input type="text" name="gm" value="<?php echo $gman;?>"></td>
            </tr>
<tr> 
                <td>Others</td>
                <td><input type="text" name="oe" value="<?php echo $other;?>"></td>
            </tr>
<tr> 
                <td>Details</td>
                <td><input type="text" name="message" value="<?php echo $details;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
               <br/><br/> <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
</center>
    </form>
</body>
</html>
