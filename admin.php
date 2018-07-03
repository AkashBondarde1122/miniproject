<?php
//ini_set('display_errors',1);
//ini_set('log_errors',1);
//ini_set('error_log',dirname(__FILE__) .'/error_log.txt');
//error_reporting(E_ALL);
$host="localhost";

$username="root";

$password="asmi2004ta";

$db_name="ssn";

$tbl_name="login";

$conn=mysqli_connect("$host","$username","$password")or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("cannot select db");

$myusername=$_POST['uname'];

$mypassword=$_POST['pwd'];

$myusername=stripslashes($myusername);  //Removes backslashes

$mypassword=stripslashes($mypassword);

//$myusername=mysqli_real_escape_string($myusername); //mysqli_real_escape_string(connection,escapestring);
//$mypassword=mysqli_real_escape_string($mypassword);

/*$sql="select * from $tbl_name where '$mypassword'=shsaas and '$myusername'=wimsspies";

$result=mysqli_query($conn,$sql); 

$count=mysqli_num_rows($result); */ //The function num_rows() checks if there are more than zero rows returned.
if($mypassword=="shsaas" && $myusername=="wimsspies")
{
header('Location:succ.htm');
}
else
{
	echo '<script language="javascript">';
	echo 'alert("SORRY!! USERNAME OR PASSWORD DOES NOT MATCH.");';
	echo 'window.location="admin.htm";';
	echo '</script>';

}
?>
