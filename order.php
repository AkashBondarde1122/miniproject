<?php
$host="localhost";
$username="root";
$password="asmi2004ta";
$db_name="ssn";
$tbl_name="billdet";
$tbl_name1="billdet1";
$tbl_name2="Spice";
$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("cannot select db");


$quantity=$_POST['QUANT'];
$sp_id=$_POST['chk1'];
$sql1="select Pack_gm,Cost_price,Sellable_Stock from Spice where Sp_id='$sp_id'";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
	{	
		$we=$row['Pack_gm'];
		$pr=$row['Cost_price'];
		$ti=$row['Sellable_Stock'];
		
		echo $quantity;
		if($quantity>$ti)
		{
			//header('Location: ./oerr.htm');	
			echo '<script language="javascript">';
			echo 'alert("SORRY!! STOCK NOT AVAILABLE.");';
			echo 'window.location="ordert.php";';
			echo '</script>';	
			
			
		}
	
		else if($quantity<=$ti)
		{
			header('Location: ./ordert.php');
			
			$quantity=stripslashes($quantity);
			$sp_id=stripslashes($sp_id);


			$quantity=mysqli_real_escape_string($conn,$quantity);
			$sp_id=mysqli_real_escape_string($conn,$sp_id);

			$total_cost=$pr*$quantity;
			$total_weight=$we *$quantity;

			if (isset($_POST['chk1']))
			{ 
			$sql="insert into $tbl_name1(Sp_id,quantity,weight,price)values('$sp_id','$quantity','$total_weight','$total_cost')";
			$result1=mysqli_query($conn,$sql);
			}
		}
		
	}
}
	


mysqli_close($conn);
//header('Location: ./ordert.php');
?>
</html>

