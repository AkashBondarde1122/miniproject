<?php
include('session.php');
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="billdet2";
//$tbl_name1="billdet1";
$tbl_name2="login";
$tbl_name3="newbill1";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");


echo "WELCOME " . $login_session . "!";

mysqli_select_db($conn,"$db_name")or die("cannot select db");
$rid=$login_session;
$sp = implode($_POST['chk1']);

if (isset($_POST['SUBMIT']))
{ 
echo $sp;
echo "<br>";
$qu = implode(' ', $_POST['QUANT']);
echo $qu;
$count=count($_POST['chk1']);
echo $count;
$k=0;
for ($i=0; $i<$count; $i++)
{
for($j=$k; $j<$k+4; $j++)
{
$var[$i][$j]=$sp[$j];
echo $var[$i][$j];
}
echo $var[$i];
$k=$k+4;

}


	/*$n=count($sp);
	   
	{
		$qu = $_POST['QUANT'];
		echo $qu;
		$var1=$sp[$i];
		$sql1="select Pack_gm,Cost_price,Sellable_Stock from Spice where Sp_id='$var1'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>0)
	{
		while($row=mysqli_fetch_assoc($result1))
		{	
			$we=$row['Pack_gm'];
			$pr=$row['Cost_price'];
			$ti=$row['Sellable_Stock'];
	
			if($qu>$ti)
			{
				//header('Location: ./oerr.htm');		
		
		
			}
			else if($qu<=$ti)
			{
				//header('Location: ./ordert.php');
		
				$qu=stripslashes($qu);
				$sp=stripslashes($sp);


				$qu=mysqli_real_escape_string($conn,$qu);
				$sp=mysqli_real_escape_string($conn,$sp);

				$total_cost=$pr*$qu;
				$total_weight=$we *$qu;
			}
		}
}
            	
$sql2="insert into $tbl_name(sid,bdate,spid,quantity,weight,price,btime) values('$rid',now(),'$var1','$qu','$total_weight','$total_cost',now())";
$result2=mysqli_query($conn,$sql2);
           
        }*/	
}

/*$sql8="select *from $tbl_name where sid='$login_session'";
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
		$total_cost=$total_cost+$pr;
	}
}
else 
{
   
}
$sql7="insert into $tbl_name3(sid,bdate,total_cost)values('$rid','$date','$total_cost')";
$result7=mysqli_query($conn,$sql7);*/
mysqli_close($conn);
//header('location:./newbill.php')
?>


