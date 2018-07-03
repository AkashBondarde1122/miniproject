<?php
include('session.php');
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="shipping";
$tbl_name1="newbill";
$tbl_name2="billdet3";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");


mysqli_select_db($conn,"$db_name")or die("cannot select db");
$address=$_POST['addr'];
$region=$_POST['region'];
$mode=$_POST['mode'];
//echo $mode;


$address=stripslashes($address);
$region=stripslashes($region);
$mode=stripslashes($mode);


$address=mysqli_real_escape_string($conn,$address);
$region=mysqli_real_escape_string($conn,$region);
$mode=mysqli_real_escape_string($conn,$mode);

$rid=$login_session;
$sql="select *from $tbl_name1 where sid='$rid'";

$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
		{	
			$date=$row['bdate'];
			$dt=date('Y-m-d');
			if($date==$dt)
			{
						$b_no=$row['b_no'];
						$total_cost=$row['total_cost'];
						//echo $total_cost;
						//echo "<br>";
						//echo $b_no; echo "<br>";
						
			}
		}	
}
$tot_we=0;
$sql1="select *from $tbl_name2 where sid='$rid'";

$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{
        while($row=mysqli_fetch_assoc($result1))
		{	
			
			$wt=$row['weight'];
			//echo "<br>";
			//echo "WEIGHT:";
			//echo $wt;
			//echo "<br>";
			$tot_we=$tot_we+$wt;
		}	
}



if($region=="ahm" && $mode=="TRUCK")
{
	

    $no_of_days = 1;
	//echo $no_of_days;
	//echo "<br>";

	$cost_g=0.05;
	//echo $cost_g;
	//echo "<br>";
	$sh_cost=$cost_g * $tot_we;
	$total_shipping=$sh_cost + $total_cost;
	//echo $total_shipping; 
	//echo "<br>";
}
else if($region=="ahm" && $mode=="TRAIN")
{
	

    $no_of_days = 2;
	/*echo $no_of_days;
	echo "<br>";
*/
	$cost_g=0.08;
//	echo $cost_g;
//	echo "<br>";

	$sh_cost=$cost_g * $tot_we;
	$total_shipping=$sh_cost + $total_cost;
//	echo $total_shipping; 
//	echo "<br>";
}
else if($region=="pun" && $mode=="TRUCK")
{
	

    $no_of_days = 1;
//	echo $no_of_days;
//	echo "<br>";

	$cost_g= 0.05;
//	echo $cost_g;
//	echo "<br>";

	$sh_cost=$cost_g * $tot_we;
	$total_shipping=$sh_cost + $total_cost;
//	echo $total_shipping; 
//	echo "<br>";
}
else if($region=="pun" && $mode=="TRAIN")
{
	

    $no_of_days = 1;
//	echo $no_of_days;
//	echo "<br>";

	$cost_g= 0.08;
//	echo $cost_g;
//	echo "<br>";

	$sh_cost=$cost_g * $tot_we;
	$total_shipping=$sh_cost + $total_cost;
//	echo $total_shipping; 
//	echo "<br>";
}
else if($region=="mum" && $mode=="TRUCK")
{
	

    $no_of_days = 1;
//	echo $no_of_days;
//	echo "<br>";

	$cost_g= 0.05;
//	echo $cost_g;
//	echo "<br>";

	$sh_cost=$cost_g * $tot_we;
	$total_shipping=$sh_cost + $total_cost;
//	echo $total_shipping; 
//	echo "<br>";
}
else if($region=="mum" && $mode=="TRAIN")
{
	

    $no_of_days = 1;
//	echo $no_of_days;
//	echo "<br>";

	$cost_g= 0.08;
//	echo $cost_g;
//	echo "<br>";

	$sh_cost=$cost_g * $tot_we;
	$total_shipping=$sh_cost + $total_cost;
//	echo $total_shipping; 
//	echo "<br>";
}
$sml="update newbill set total_cost='$total_shipping' where b_no='$b_no'";
$resu=mysqli_query($conn,$sml);

$query="insert into shipping(b_no,address,region,no_of_days,mode,cost_w,total_ship_cost)values('$b_no','$address','$region','$no_of_days','$mode','$cost_g','$sh_cost') ";
$res=mysqli_query($conn,$query);

//$total_cost=20 * $distance;




mysqli_close($conn);

?>
<?php
include('session.php');
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="newbill";
$tbl_name1="login";
$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("cannot select db");
$rid=$login_session;
$sql1="select *from $tbl_name1 where sid='$rid'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{
        while($row=mysqli_fetch_assoc($result1))
	{	
		$fname=$row['firstname'];
		$lname=$row['lastname'];
		
	}	
}
$sql="select *from $tbl_name where sid='$rid'";

$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
	{	
		$b_no=$row['b_no'];
		$bdate=$row['bdate'];
		$tot=$row['total_cost'];
	}	
}


?>

<html>
<style>
form {
    border: 1px solid #f1f1f1;
    margin-top:30px;
    margin-bottom: 200px;
    margin-right:330px ;
    margin-left: 330px;
    background: rgba(255,244,234, 0.5);
}
body
{
    background-image: url("11111.jpg");
   height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
background-attachment: fixed;
}
a:link, a:visited 
{
    background-color: black;
    color: white;
    padding: 16px 32px;
    text-align: center;
    margin: 4px 2px;
    text-decoration: none;
    display: inline-block;
}
h1
{
color:black;
}

h2
{
color:black;
}
h3
{
color:black;
}
h4
{
color:black;
}
li {
    float: left;
}
ul {
    list-style-type: none;
    padding: -10px;
    overflow: hidden;
    background-color:  rgba(255,244,234, 0.5);
}
li a:hover {
    background-color: red;
}
</style>
<body>
<ul>
<li><a href="myhome.htm"><b>HOME</b></a>
<li><a href="About.htm"><b>ABOUT</b></a>
<li><a href="help.htm"><b>HELP</b></a>
<li><a href="logout.php">LOGOUT</a>
</ul>
<center>
<form>
<h1>
BILL NO:<?php echo $b_no?>    <br>BILL DATE: <?php echo $bdate ?><br>
</h1>
<h2>
RETAILER ID:<?php echo $rid?> 
<br>
<br>
NAME:<?php echo $fname?> <?php echo $lname?>
<br>
<br></h2>
<h4><b>
<?php 
$sql8="select *from billdet3 where sid='$login_session'";
$result8=mysqli_query($conn,$sql8);
echo "SP_ID.............................PRICE";
if(mysqli_num_rows($result8)>0)
{
        while($row=mysqli_fetch_assoc($result8))
	{	
		$sp=$row['spid'];
		$pr=$row['price'];
		$date=$row['bdate'];
		$dt=date('Y-m-d');
		if($date==$dt)
		{	echo "<br>";
			echo $sp; echo "...................................."; echo $pr;
		
		}
	}

}
mysqli_close($conn); 

?></b></h4>
<h2>

TOTAL SHIPPING COST IS::<?php echo $sh_cost ?><br>
TOTAL COST IS::<?php echo $tot ?></h2>


<br><br><br>
<h3>**** THANKS FOR ASSOCIATING WITH WIMS!! ****</h3>
</form>
</center>
</body>

</html>



