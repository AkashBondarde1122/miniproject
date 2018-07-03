<?php
include('session.php');
?>
<html>
<center>
<style>

body
{
    /* The image used */
    background-image: url("11111.jpg");

    /* Full height */
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: absolute;
}

ul {
    list-style-type: none;
   /*
 margin-top:3px;
    margin-bottom: 1px;
    margin-right:1010px ;
    margin-left: 3px;*/
    padding: -10px;
    overflow: hidden;
    background-color:  rgba(255,244,234, 0.5);
}

li {
    float: left;
}

form
{
margin-right:330px ;
    margin-left: 330px;
height:150px;
background:rgba(130,130,130,0.3);
padding:20px 50px;
border:1px solid;
border-top-color:rgba(255,255,255,.4);
border-left-color:rgba(255,255,255,.4);
border-right-color:rgba(60,60,60,.4);

}
img.avatar {
    width: 13%;
    border-radius: 50%;
}

.container {
    padding: 20px;
}

a:link, a:visited 
{
    background-color: black;
    color: white;
    padding: 15px 15px;
    text-align: center;
    margin: 4px 2px;
    text-decoration: none;
    display: inline-block;
}
a:hover, a:active 
{
    background-color: red;
}
h1 
{
    font-family: "Kinnari", Times, serif;
    font-size: 40px;
}
h2 
{
    font-family: "Kinnari", Times, serif;
    font-size: 25px;
}
h3
{
	font-family: "Kinnari", Times, serif;
    font-size: 25px;
}
INPUT[TYPE=TEXT],SELECT
{
	
	
	MARGIN:20PX 10PX;
	
	BORDER:1PX SOLID #CCC;
	BORDER RADIUS:4PX;
	BOX-SIZING:BORDER-BOX;
         width: 50%;
}

INPUT[TYPE=password],SELECT
{
	
	
	MARGIN:20PX 10PX;
	DISPLAY:INLINE-BLOCK
	BORDER:1PX SOLID #CCC;
	BORDER RADIUS:4PX;
	BOX-SIZING:BORDER-BOX;
         width: 50%;
}
input[type=submit]
{
	width:200px;
	height:200px;
    background-color: #1ccebf;
    border: none;
    color: white;
    padding: 10px 15px;
	spacing: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
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
<h3><?php echo "WELCOME " . $login_session1 ." ".$lname. "!"; ?></h3>
<form>
<h2>YOU WANT TO?</h2><br>
 <a href="mid.php">ORDER</a>
<a href="user.php">MY PROFILE</a>
</FORM>
</center>
</body>
</html>
