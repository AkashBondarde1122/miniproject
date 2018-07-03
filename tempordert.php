<?php
include('session.php');
?>
<!DOCTYPE HTML>
<HTML>
<STYLE>
a:link, a:visited 
{
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
a:hover, a:active 
{
    background-color: red;
}
TABLE
{
FONT-FAMILY:ARIAL,SANS-SERIF;
BORDER-COLLAPSE:COLLAPSE;
WIDTH:100%;
}
TD,TH
{
BORDER:1PX SOLID #DDDDDD;
TEXT-ALIGN:LEFT;
PADDING:2PX;
}
TR:NTH-CHILD(EVEN)
{
BACKGROUND-COLOR:#DDDDDD;
}
INPUT[TYPE=TEXTBOX],SELECT
{
	WIDTH:50%;
	PADDING:5PX 5PX
	MARGIN:8PX 0;
	DISPLAY:INLINE-BLOCK
	BORDER:1PX SOLID #CCC;
	BORDER RADIUS:4PX;
	BOX-SIZING:BORDER-BOX;
}
H2
{
	COLOR:white;
}
H3
{
	COLOR:white;
}

textarea 
{
    width: 70%;
    height: 75px;
    padding: 10px 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
input[type=submit]
{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 5px 5px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
body
{
    /* The image used */
    background-image: url("11111.jpg");
    /* Full height */
   height: 100%; 

    /* Center and scale the image nicely */
    background-position:center;
    background-repeat: no-repeat;
    background-size: cover;
	background-attachment:fixed;
}
INPUT[TYPE=password],SELECT
{
	
	PADDING:10PX 10PX
	MARGIN:20PX 10PX;
	DISPLAY:INLINE-BLOCK
	BORDER:1PX SOLID #CCC;
	BORDER RADIUS:4PX;
	BOX-SIZING:BORDER-BOX;
    width: 50%;
}
TABLE
{

background:rgba(130,130,130,0.3);
border-top-color:rgba(255,255,255,.4);
border-left-color:rgba(255,255,255,.4);
border-bottom-color:rgba(60,60,60,.4);
border-right-color:rgba(60,60,60,.4);
}
a:link, a:visited 
{
    background-color: white;
    color: black;
    padding: 16px 32px;
    text-align: center;
    margin: 4px 2px;
    text-decoration: none;
    display: inline-block;
}
</STYLE>
<BODY>
<a href="loginpro.htm">BACK</a>
<H2 STYLE="TEXT-ALIGN:CENTER">ORDER</H2><BR>
<center>
<h2>
<?php
echo "WELCOME " . $login_session . "!";
?>
</h2>
</center>
<TABLE>
<TR>
<TD><h3>SPICE ID</h3></TD>
<TD><h3>SPICE NAME</h3></TD>
<TD><h3>SPICE TYPE</h3></TD>
<TD><h3>WEIGHT/PACKET(IN GM.)</h3></TD>
<TD><h3>PACK QUANT.</h3></TD>

</TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp01">Sp01</TD>
<TD>ROZANA MASALA</TD>
<TD>PROCESSED</TD>
<TD>50</td>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT" ></TD>

</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp02">Sp02</h3></TD>
<TD><h3>ROZANA MASALA</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>200</h3></td>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>

</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp03">Sp03</TD>
<TD>GODA MASALA</TD>
<TD>PROCESSED</TD>
<TD>100</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>

</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp04">Sp04</h3></TD>
<TD><h3>GODA MASALA</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>200</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp05">Sp05</TD>
<TD>GARAM MASALA</TD>
<TD>PROCESSED</TD>
<TD>100</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp06">Sp06</h3></TD>
<TD><h3>GARAM MASALA</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>200</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp07">Sp07</TD>
<TD>HOT CHILLI POWDER</TD>
<TD>PROCESSED</TD>
<TD>100</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp08">Sp08</h3></TD>
<TD><h3>HOT CHILLI POWDER</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>200</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp09">Sp09</TD>
<TD>KASHMIRI CHILLI POWDER</TD>
<TD>PROCESSED</TD>
<TD>200</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp10">Sp10</h3></TD>
<TD><h3>TURMERIC POWDER</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>50</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp11">Sp11</TD>
<TD>TURMERIC POWDER</TD>
<TD>PROCESSED</TD>
<TD>100</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp12">Sp12</h3></TD>
<TD><h3>CORRIANDER POWDER</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>100</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp13">Sp13</TD>
<TD>CUMIN POWDER</TD>
<TD>PROCESSED</TD>
<TD>100</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT" ></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp14">Sp14</h3></TD>
<TD><h3>PAVBHAJI MASALA</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>100</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp15">Sp15</TD>
<TD>PAVBHAJI MASALA</TD>
<TD>PROCESSED</TD>
<TD>200</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp16">Sp16</h3></TD>
<TD><h3>SAMBHAR MASALA</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>100</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp17">Sp17</TD>
<TD>SAMBHAR MASALA</TD>
<TD>PROCESSED</TD>
<TD>200</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp18">Sp18</h3></TD>
<TD><h3>BIRYANI MASALA</h3></TD>
<TD><h3>PROCESSED</h3></TD>
<TD><h3>100</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp19">Sp19</TD>
<TD>CHAT MASALA</TD>
<TD>PROCESSED</TD>
<TD>100</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp20">Sp20</h3></TD>
<TD><h3>TURMERIC</h3></TD>
<TD><h3>RAW</h3></TD>
<TD><h3>500</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp21">Sp21</TD>
<TD>CLOVE</TD>
<TD>RAW</TD>
<TD>500</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp22">Sp22</h3></TD>
<TD><h3>CARDAMOM</h3></TD>
<TD><h3>RAW</h3></TD>
<TD><h3>500</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp23">Sp23</TD>
<TD>PEPPER</TD>
<TD>RAW</TD>
<TD>500</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><h3><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp25">Sp25</h3></TD>
<TD><h3>CUMIN</h3></TD>
<TD><h3>RAW</h3></TD>
<TD><h3>500</h3></TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>

<TR><Form method="post" action="order.php">
<TD><INPUT TYPE="checkbox" NAME="chk1" VALUE="Sp26">Sp26</TD>
<TD>BAY LEAF</TD>
<TD>RAW</TD>
<TD>200</TD>
<TD><INPUT TYPE="TEXTBOX" NAME="QUANT"></TD>
<TD><INPUT TYPE="submit" NAME="DONE" VALUE="DONE"></TD>
</form></TR>
</TABLE>
<BR>
<BR>
<h2>Do you want Shipping??</h2>
<form method="post" action="orderte.php">

<input type="submit" value="SUBMIT" NAME="SUBMIT" >
<a href="ship1.php">YES</a>
</form>

<BR><BR>

</BODY>
</HTML>


