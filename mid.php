<?php
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
//$tbl_name="billdet";
$tbl_name1="billdet1";
$tbl_name2="Spice";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
if($conn)
{
	echo"connection successful";
}
else
{
	echo"connection unsuccessful";
}
mysqli_select_db($conn,"$db_name")or die("cannot select db");

$sql="create table $tbl_name1(Sp_id char(4),quantity int,price int,weight int,foreign key(Sp_id)references $tbl_name2(Sp_id))";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
header('Location: ./ordert.php');
?>
