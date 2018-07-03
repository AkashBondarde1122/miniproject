<?php
include('session.php');
?>
<!DOCTYPE HTML>
<HTML>
<STYLE>
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
form
{
position:right;
width:500px;
margin:0 auto;
background:rgba(130,130,130,0.3);
padding:50px 50px;
border:1px solid;
border-top-color:rgba(255,255,255,.4);
border-left-color:rgba(255,255,255,.4);
border-bottom-color:rgba(60,60,60,.4);
border-right-color:rgba(60,60,60,.4);
}
INPUT[TYPE=TEXTBOX],SELECT
{
	WIDTH:50%;
	PADDING:12PX 20PX
	MARGIN:8PX 0;
	DISPLAY:INLINE-BLOCK
	BORDER:1PX SOLID #CCC;
	BORDER RADIUS:4PX;
	BOX-SIZING:BORDER-BOX;
}
H1 {
    text-shadow:-2px -2px white;
    font-family: "Kinnari", Times, serif;
    font-size: 40px;
    color:black;
}
H2 {
    text-shadow:-1px -1px white;
    font-family: "Kinnari", Times, serif;
    font-size: 30px;
    color:black;
}
textarea 
{
    width: 50%;
    height:100px;
    padding: 20px 30px;
 
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 17px;
    resize: none;
}
input[type=submit]
{
    background-color:black;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 2px 2px;
    cursor: pointer;
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



</STYLE>
<BODY>
<ul>
<li><a href="myhome.htm"><b>HOME</b></a>
<li><a href="About.htm"><b>ABOUT</b></a>
<li><a href="help.htm"><b>HELP</b></a>
<li><a href="logout.php">LOGOUT</a>
</ul>
<center>
<H1>SHIPPING SERVICES</H1>
<H2 STYLE="TEXT-ALIGN:CENTER">AFFORDABLE SHIPPING SERVICES AVAILABLE!!</H2>

<div id="bg"></div>
<?php
//echo "WELCOME " . $login_session . "!";
?>
<form method="post" action ="ship.php">
<H2>ADDRESS::</H2>  
 <textarea name="addr" value="addr"></textarea>
<br> <H2>REGION::</H2> 
<BR>
<select id="region" name="region">
    <option value="ahm">AHMEDNAGAR</option>
    <option value="mum">MUMBAI</option>
    <option value="pun">PUNE</option>
  </select>
<BR>
 
<H2>MODE::</H2> 
<SELECT label="mode" name="mode" value="mode">
<OPTION>TRUCK</OPTION>
<OPTION>TRAIN</OPTION>
</select>
 <br>
 
<input type="submit"  VALUE="KNOW THE COST!!">
</form>
</center>
</BODY>
</HTML>

