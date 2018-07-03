<?php
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="Spice";
//$tbl_name1="billdet1";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
/*if($conn)
{
	echo"connection successful";
}
else
{
	echo"connection unsuccessful";
}*/

mysqli_select_db($conn,"$db_name")or die("cannot select db");

$quantity=$_POST['QUANT'];
$sp_id=$_POST['chk1'];
//$weight=$_POST['sel'];
//echo $weight;
//echo $sp_id;

//echo $quantity;



$quantity=stripslashes($quantity);
$sp_id=stripslashes($sp_id);
//$weight=stripslashes($weight);


$quantity=mysqli_real_escape_string($conn,$quantity);
$sp_id=mysqli_real_escape_string($conn,$sp_id);
//$weight=mysqli_real_escape_string($conn,$weight);




if (isset($_POST['chk1']))
{ 
	$sql="update $tbl_name set Sellable_Stock='$quantity'+Sellable_Stock where Sp_id='$sp_id'";
	

	
	//$result=mysqli_query($conn,$sql);
}



$result=mysqli_query($conn,$sql);
header('location:update.htm');
mysqli_close($conn);

?>


