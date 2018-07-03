<?php

$host="localhost";

$username="root";

$password="asmi2004ta";

$db_name="ssn";

$tbl_name="login";






$conn=mysqli_connect("$host","$username","$password")or die("cannot connect");

/*if($conn)
{
	echo "Connection success";
}
else
{
echo "Connection failed";
}*/

mysqli_select_db($conn,"$db_name")or die("cannot select db");

session_start();

$user_check=$_SESSION['login_user'];
$sql="select sid from $tbl_name where username='$user_check'";
$ses_sql=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['sid'];
//echo $login_session;
//$new=$_SESSION['$login_session'];
/*if(!isset($login_session))
{
	header('location:succ.php');
	mysqli_close($conn);
}*/
//$user_check=$_SESSION['login_user'];

?><?php

$host="localhost";

$username="root";

$password="asmi2004ta";

$db_name="ssn";

$tbl_name="login";






$conn=mysqli_connect("$host","$username","$password")or die("cannot connect");

/*if($conn)
{
	echo "Connection success";
}
else
{
echo "Connection failed";
}*/

mysqli_select_db($conn,"$db_name")or die("cannot select db");

session_start();

$user_check=$_SESSION['login_user'];
$sql="select sid ,firstname from $tbl_name where username='$user_check'";
$ses_sql=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['sid'];
$login_session1=$row['firstname'];
//$new=$_SESSION['$login_session'];
/*if(!isset($login_session))
{
	header('location:succ.php');
	mysqli_close($conn);
}*/
//$user_check=$_SESSION['login_user'];

?>
