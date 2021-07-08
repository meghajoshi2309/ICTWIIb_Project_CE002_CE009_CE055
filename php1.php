<?php
//connect database 
$con=mysqli_connect("localhost","root","","productdb") or die(mysqli_error());	  
//select values from empInfo table
$sql = "SELECT * from producttb WHERE id='2'";
$result = mysqli_query($con,$sql);
//print_r(mysqli_fetch_row($result));	
//$row = mysqli_fetch_row($result);
while($r=mysqli_fetch_row($result))
{
echo $r[1]."<br/>";
}	
//echo $row['product_name'];
mysqli_close($con);
?>