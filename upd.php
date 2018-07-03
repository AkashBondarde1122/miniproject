<?php
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="Spice";
$tbl_name1="damaged";
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
$dquantity=$_POST['DQUANT'];
$quantity=$_POST['QUANT'];
$sp_id=$_POST['chk1'];
//$weight=$_POST['sel'];
//echo $weight;
//echo $sp_id;

//echo $quantity;


$dquantity=stripslashes($dquantity);
$quantity=stripslashes($quantity);
$sp_id=stripslashes($sp_id);
//$weight=stripslashes($weight);

$dquantity=mysqli_real_escape_string($conn,$dquantity);
$quantity=mysqli_real_escape_string($conn,$quantity);
$sp_id=mysqli_real_escape_string($conn,$sp_id);
//$weight=mysqli_real_escape_string($conn,$weight);




if (isset($_POST['DONE']))
{ 
	$sql="update $tbl_name set Sellable_Stock=Sellable_Stock-'$quantity',Damaged_no=Damaged_no+'$quantity' where Sp_id='$sp_id'";
	

	
	//$result=mysqli_query($conn,$sql);
}



$result=mysqli_query($conn,$sql);
$sql3="update $tbl_name set Damaged_no=Damaged_no-'$dquantity' where Sp_id='$sp_id'";
$result3=mysqli_query($conn,$sql3);
$sql4="select Cost_price from Spice where Sp_id='$sp_id'";
$result4=mysqli_query($conn,$sql4);
if(mysqli_num_rows($result4)>0)
{
        while($row=mysqli_fetch_assoc($result4))
	{	
		$pr=$row['Cost_price'];
		
	}
}
$loss=$pr*$quantity;
$sql2="insert into $tbl_name1(spid,quantity,loss) values('$sp_id','$quantity','$loss')";
	$result2=mysqli_query($conn,$sql2);
header('location:upd.htm');
mysqli_close($conn);

?>


