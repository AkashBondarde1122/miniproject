<?php
include('session.php');
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

.imgcontainer {
    text-align: center;
    margin: 20px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container{
padding:20px;
color:white;
}

img.avatar1 {
    width: 5%;
    border-radius: 50%;
}
h1 {
    font-family: "Kinnari", Times, serif;
    font-size: 50px;
    color:white;
}
h2 {
    font-family: "Kinnari", Times, serif;
    font-size: 25px;
    color:white;
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

</style>
<body>

<ul>
<li><a href="succ.php"><b>BACK</b></a>
<li><a href="About.htm"><b>ABOUT</b></a>
<li><a href="help.htm"><b>HELP</b></a>
</ul>
<div class="imgcontainer">
    <img src="99.jpeg" alt="Avatar" class="avatar">
  </div>
<center>
<?php
echo "WELCOME " . $login_session . "!";
?>

<h1 STYLE="TEXT-ALIGN:CENTER">MY PROFILE</h1>
<a href="logout.php">LOGOUT</a>
</FORM>
</center>
</body>
</html>
