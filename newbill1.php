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
    background-color: rgba(255,244,234, 0.8);
    color: black;
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
    background-color: white;
}
</style>
<body>
<ul>
<li><a href="Home1.htm"><b>HOME</b></a>
<li><a href="About1.htm"><b>ABOUT</b></a>
<li><a href="Help.htm"><b>HELP</b></a>
</ul>
<center>
<form>
<h1> 
BILL WITH SHIPPING.
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
echo "SP_ID...............PRICE";
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
			echo $sp; echo ".............."; echo $pr;
		
		}
	}

}
mysqli_close($conn); 

?></b></h4>
<h2>
TOTAL COST IS::<?php echo $tot ?></h2>



<br><br><br>
<h3>**** THANKS FOR ASSOCIATING WITH WIMS!! ****</h3>
</form>
</center>
</body>

</html>

