<?php
$host="localhost";
$username="root";
$password="Shwetha";
$db_name="ssn";
$tbl="billdet";
$tbl_name1="billdet1";

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

$sql="select *from $tbl_name1";


$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
	{	
		echo "<br>";
		$sp=$row['Sp_id'];
		$qu=$row['quantity'];
		$we=$row['weight'];
		$pr=$row['price'];
		echo $sp;
		echo $qu;
		echo $we;
		echo $pr;
		$sql1="insert into $tbl(Sp_id,quantity,weight,price)values('$sp','$qu','$we','$pr')";
	if($sql1)
	{
		echo "hi";
	}
	$result1=mysqli_query($conn,$sql1);
	//$sql="insert into $tbl_name(address,no_of_days,region,mode,total_cost)values('$address','$no_of_days','$region','$mode','$total_cost')";
	echo "Data entered";
	}
}
else 
{
    echo "ppp";
}
/*if (isset($_POST['SUBMIT']))
{ 
	
}*/


mysqli_close($conn);

?>


