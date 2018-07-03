<?php
session_start();

$host="localhost";

$username="root";

$password="asmi2004ta";

$db_name="ssn";

$tbl_name="login";

$conn=mysqli_connect("$host","$username","$password")or die("cannot connect");  //The mysqli_connect() function opens a new connection to the MySQL server.  The die() function prints a message and exits the current script.

mysqli_select_db($conn,"$db_name")or die("cannot select db"); //select database

$myusername=$_POST['uname']; //The POST method transfers information

$mypassword=$_POST['pwd'];

$myusername=stripslashes($myusername);  //Removes backslashes

$mypassword=stripslashes($mypassword);

//$myusername=mysqli_real_escape_string($myusername); 
//$mypassword=mysqli_real_escape_string($mypassword);

$sql="select * from $tbl_name where password='$mypassword' and username='$myusername'";

$result=mysqli_query($conn,$sql);  //Performs a query against the database.

$count=mysqli_num_rows($result);  //returns number of rows

if($count==1)
{
	$_SESSION["login_user"]=$myusername;
	header('Location: ./succ.php');
	//echo "Authentication successfull";
}
else
{
	echo '<script language="javascript">';
	echo 'alert("SORRY!! USERNAME OR PASSWORD DOES NOT MATCH.");';
	echo 'window.location="loginpro.htm";';
	echo '</script>';	
	//header('Location: ./incorrect.php');
}
mysqli_close($conn);
?>
