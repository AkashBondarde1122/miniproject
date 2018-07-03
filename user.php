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
		$email=$row['email'];
		$mob=$row['mobile'];
		
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
<ul>
<li><a href="succ.php">BACK</a>
<li><a href="logout.php">LOGOUT</a>
<li><a href="Help.htm"><b>HELP</b></a>
</ul>
<center>
<form>
<h1>
</h1>
<h2>
RETAILER ID  :  <?php echo $rid; ?> 
<br>
NAME  :  <?php echo $fname; ?> <?php echo $lname; ?>
<br></h2><H3>
EMAIL  :  <?php echo $email; ?>
<br>
MOBILE NUMBER  : <?php echo $mob; ?>
<br></H3>


<table>
<h4><b> CURRENT MONTH's TRANSACTIONS
<?php
$sql="select *from $tbl_name where sid='$rid'";
$result=mysqli_query($conn,$sql);
?>
<tr><td> BILL NO.</TD><TD>BILL DATE</TD><TD>COST</TD></TR>
<?php
if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
	{ 	
		
		$b_no=$row['b_no'];
		$bdate=$row['bdate'];
		$d= date('m',strtotime($bdate));	
		//echo $d;
		$dt=date('m');
		//echo $dt;
		
		$tot=$row['total_cost'];
	if($d==$dt)
{
		 
?>
		<tr><TD><?php echo $b_no; ?> </TD>
		<TD> <?php echo $bdate; ?></TD>
		<TD><?php echo $tot; ?></TD></tr>
	<?php }
}	
}
?></table>
</b></h2>
<br>
<h3>**** THANKS FOR ASSOCIATING WITH WIMSSSU!! ****</h3>
</form>
</center>
</body>

</html>

