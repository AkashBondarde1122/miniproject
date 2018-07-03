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
color:#900C3F;
}

TABLE
{
background:rgba(130,130,130,0.3);
border-top-color:rgba(255,255,255,.4);
border-left-color:rgba(255,255,255,.4);
border-bottom-color:rgba(60,60,60,.4);
border-right-color:rgba(60,60,60,.4);
WIDTH:50%;
}
TD,TH
{
BORDER:1PX SOLID black;
TEXT-ALIGN:LEFT;
PADDING:2PX;
}
TR:NTH-CHILD(EVEN)
{
BACKGROUND-COLOR:#DDDDDD;
}
</style>
<body>

<a href="succ.htm">BACK</a>

<center>


<form>
<table>
 <H2>THE BEST RETAILER</H2>
<h4><b>
<?php
$sql="select *from $tbl_name";
$result=mysqli_query($conn,$sql);
?>
<tr><td> BILL NO.</TD><TD>sid</TD><TD>COST</TD></TR>
<?php
$high=0;
if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
	{ 	
		$bdate=$row['bdate'];	
		$d= date('m',strtotime($bdate));	
		$dt=date('m');
		
		
		$tot=$row['total_cost'];
	if($d==$dt)
{
if($tot>$high)
{
$b_no=$row['b_no'];
$sid=$row['sid'];
$high=$tot;
}	 
}
}	
}
$sql1="select *from $tbl_name1 where sid='$sid'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{
        while($row=mysqli_fetch_assoc($result1))
	{	
		$fname=$row['firstname'];
		$lname=$row['lastname'];
		$email=$row['email'];
		$mob=$row['mobile'];
		
	}	
}
?>
<tr><TD><?php echo $b_no; ?> </TD>
<TD> <?php echo $sid; ?></TD>
<TD><?php echo $high; ?></TD></tr>
</table>
</b></h2>

<h1>
</h1>
<h3>
RETAILER ID :  <?php echo $sid; ?></h3>
<br>
<h3>NAME :  <?php echo $fname; ?> <?php echo "  "; echo $lname; ?></h3>
<br>
<h4>EMAIL :  <?php echo $email; ?></h4>
<br>
<h4>MOBILE NUMBER :  <?php echo $mob; ?></h4>
<br>
<br>

</form>
</center>
</body>

</html>

