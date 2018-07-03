<?php
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="Spice";
$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
if($conn)
{
	//echo"connection successfull user found!!<br>";
}
else
{
	//echo"connection unsuccessful<br>";
}

mysqli_select_db($conn,"$db_name")or die("cannot select db");



?>

<html>
<style>
form {
    border: 1px solid #f1f1f1;
    /*margin-top:30px;
    margin-bottom: 200px;
    margin-right:330px ;
    margin-left: 330px;*/
    background: rgba(255,244,234, 0.5);
}
TABLE
{
background:rgba(130,130,130,0.3);
border-top-color:rgba(255,255,255,.4);
border-left-color:rgba(255,255,255,.4);
border-bottom-color:rgba(60,60,60,.4);
border-right-color:rgba(60,60,60,.4);
WIDTH:100%;
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
body
{
    /* The image used */
    background-image: url("11111.jpg");

    /* Full height */
   height: 100%; 

    /* Center and scale the image nicely */
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

h4
{
color:black;
}

</style>
<body>

<a href="succ.htm">BACK</a>
<center>
<form>
<TABLE>
<h4>
<TR><TD><b>SP_ID</b></TD><TD><b>SP_NAME</b></TD><TD><b>SP_TYPE</b></TD><TD><b>PACK_GM</b></TD><TD><b>COST_PRICE</b></TD><TD><b>DAMAGED STOCK</b></TD><TD><b>SELLABLE_STOCK</b></TD></TR>
<?php
$sql1="select *from $tbl_name";

$result1=mysqli_query($conn,$sql1);


if(mysqli_num_rows($result1)>0)
{
        while($row=mysqli_fetch_assoc($result1))
	{
?>
<TR>
<?php	
		$spid=$row['Sp_id'];
		$sname=$row['Sp_name'];
		$stype=$row['Sp_type'];
		$spack=$row['Pack_gm'];
		$scp=$row['Cost_price'];
		$sdam=$row['Damaged_no'];
		$ssel=$row['Sellable_Stock'];
?>
<TD><?php echo $spid; echo "  ";?></TD>
<TD><?php echo " "; echo $sname ; ?></TD>
<TD><?php echo " " ;echo $stype ;?></TD>
<TD><?php echo " "; echo $spack; ?></TD>
<TD><?php echo " ";echo $scp; ?></TD>
<TD><?php echo " "; echo $sdam ;?></TD>
<TD><?php echo " " ;echo $ssel ;?></TD>
</TR>
<?php
	}	
}
?>
</h4>

</TABLE>
</form>
</center>
</body>
<?php
mysqli_close($conn); ?>

</html>

