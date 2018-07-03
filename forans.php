<?php
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="login";

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


$email=$_POST[ 'email' ];
$mobile=$_POST[ 'mob' ];
$myusername=$_POST[ 'uname' ];


$email=stripslashes($email);
$mobile=stripslashes($mobile);
$myusername=stripslashes($myusername);


$email=mysqli_real_escape_string($conn,$email);
$mobile=mysqli_real_escape_string($conn,$mobile);
$myusername=mysqli_real_escape_string($conn,$myusername);

//$sql2="select* from $tbl_name where username='$myusername' ";
$sql3="select *from $tbl_name where username= '$myusername' and email='$email'";//select* from $tbl_name where email='$email' and username='$myusername' ";

//$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);



if(mysqli_num_rows($result3)>0)
{
        while($row=mysqli_fetch_assoc($result3))
	{
			$u=$row["username"];
			$p=$row["password"];
		//echo <br> $row["username"].<br><br>"--USERNAME HAS THE PASSWORD<br><br>:  ".$row["password"]."<br>";
	}
}
else 
{
   // echo "ppp";
}



mysqli_close($conn);

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
a:hover {
    background-color: red;
h1
{
color:black;
}

h2
{
color:black;
}
</style>
<body>
<?php 
if($myusername==$u)
{ ?>

<a href="loginpro.htm">BACK</a>
<center>
<form>
<h2>PASSWORD RETRIEVED
<br>
<br>
<br>
USERNAME <?php echo $u?> :: HAS PASSWORD 
<?php echo $p?>

<?php
}
else
{ ?>
<a href="loginpro.htm">BACK</a>
<center>
<form>
<h2>PASSWORD CANNOT BE RETRIEVED!
<br>
<br>
<br>
<?php
}
?>


<br>
<br>

</h2>
</form>
</center>
</body>
</html>
