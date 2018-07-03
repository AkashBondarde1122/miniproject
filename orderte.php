<?php

include('session.php');

$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="billdet3";
$tbl_name1="billdet1";
$tbl_name2="login";
$tbl_name3="newbill";
$tbl_name4="Spice";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");


echo "WELCOME " . $login_session . "!";
mysqli_select_db($conn,"$db_name")or die("cannot select db");


$sql="select *from $tbl_name1";
$rid=$login_session;
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
        	echo "stupid";
		$sml="update $tbl_name4 set Sellable_Stock=Sellable_Stock - '$qu' where Sp_id='$sp'";
		$res=mysqli_query($conn,$sml);
		$sql2="insert into $tbl_name(sid,bdate,spid,quantity,weight,price) values('$rid',now(),'$sp','$qu','$we','$pr')";
		
	$result2=mysqli_query($conn,$sql2);
	
	}
}
else 
{
    //echo "oops";
}

/*$sql1="select sid from login where Sp_id='$login_session'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{
        while($row=mysqli_fetch_assoc($result1))
	{	
		//echo "<br>";
		
		$rid=$row['sid'];
		//$pr=$row['Cost_price'];
		
		echo $rid;
		//echo $pr;
		
	}
}
else 
{
    echo "ppp";
}
*/

if (isset($_POST['SUBMIT']))
{
	$sql9="drop table $tbl_name1";
$result5=mysqli_query($conn,$sql9);

$sql8="select *from $tbl_name where sid='$login_session'";
//$rid=$login_session;
$total_cost=0;
$result8=mysqli_query($conn,$sql8);
if(mysqli_num_rows($result8)>0)
{
        while($row=mysqli_fetch_assoc($result8))
	{	
		
		$rid=$row['sid'];
		
		$we=$row['weight'];
		$pr=$row['price'];
		$date=$row['bdate'];
		$dt=date('Y-m-d');
		echo $dt;
		if($date==$dt)
	{
		$total_cost=$total_cost+$pr;
}
 echo "<br>";
    echo "<br>";
	}
}
else 
{
    //echo "oops";
}
echo "BILL IS:";
echo $total_cost;

$sql7="insert into $tbl_name3(sid,bdate,total_cost)values('$rid','$date','$total_cost')";
	if($sql7)
	{
		echo "hi";
		 //echo "WELCOME " . $login_session . "!"; 
	}
	$result7=mysqli_query($conn,$sql7);
	//$sql="insert into $tbl_name(address,no_of_days,region,mode,total_cost)values('$address','$no_of_days','$region','$mode','$total_cost')";
	echo "Data entered"; 
//$sql2="INSERT INTO $tbl_name () VALUES (now())";
//$result=mysqli_query($conn,$sql2);
	
}


/*$sql10 = "SELECT sid, SUM(price) FROM billdet GROUP BY (sid)";   
$result6 = mysql_query($sql10);     
while($row = mysql_fetch_array($result6)){

       echo "Total ". $row['sid']. " = ". $row['SUM(price)'];

       echo "<br />";

}
$result = mysql_query($query);*/
mysqli_close($conn);
header('Location:./newbill.php');
?>


