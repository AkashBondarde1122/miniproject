
<?php
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="login";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
if($conn)
{
	echo"connection successful";
}
else
{
	echo"connection unsuccessful";
}

mysqli_select_db($conn,"$db_name")or die("cannot select db");

$firstname=$_POST[ 'fname' ];
$lastname=$_POST[ 'lname' ];
$email=$_POST[ 'email' ];
$mobile=$_POST[ 'mob' ];
$region=$_POST[ 'REGION' ];
$myusername=$_POST[ 'uname' ];
$mypassword=$_POST[ 'pwd' ];

$firstname=stripslashes($firstname);
$lastname=stripslashes($lastname);
$email=stripslashes($email);
$mobile=stripslashes($mobile);
$region=stripslashes($region);
$myusername=stripslashes($myusername);
$mypassword=stripslashes($mypassword);

$firstname=mysqli_real_escape_string($conn,$firstname);
$lastname=mysqli_real_escape_string($conn,$lastname);
$email=mysqli_real_escape_string($conn,$email);
$mobile=mysqli_real_escape_string($conn,$mobile);
$region=mysqli_real_escape_string($conn,$region);
$myusername=mysqli_real_escape_string($conn,$myusername);
$mypassword=mysqli_real_escape_string($conn,$mypassword);

//$sql="update $tbl_name set password='$mypassword' where name='$myusername'";
//$sql="insert into $tbl_name(firstname,lastname,email,mobile,region,username,password) values('$firstname','$lastname','$email','$mobile','$region','$myusername','$mypassword')";
$sql2="select* from $tbl_name where username='$myusername' ";
$sql3="select* from $tbl_name where email='$email' and username='$myusername' ";
//$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);

if(mysqli_num_rows($result3)>0)
{
	echo "Already registered!!!!";
}
else if(mysqli_num_rows($result2)>0)
{
	echo "User name exist....Please input a different name!!!!";
}

else 
{
	$sql="insert into $tbl_name(firstname,lastname,email,mobile,region,username,password) values		('$firstname','$lastname','$email','$mobile','$region','$myusername','$mypassword')";
	$result=mysqli_query($conn,$sql);
	header('Location: ./loginpro.htm');
	echo "User registered successfully!!!!";
}

mysqli_close($conn);

?>


