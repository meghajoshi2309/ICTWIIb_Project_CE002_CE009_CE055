<?php
    session_start();



    echo "<center>";
    
    require_once ("component.php");

    
			$a=0;
        if (isset($_SESSION['username'])){
				// $product_id = array_column($_SESSION['cart'], 'product_id');
				$con = mysqli_connect("localhost","root","","fg_pass");
				$id1=$_SESSION['user_id'];
                $sql="SELECT * FROM `purchase` WHERE user_id='$id1'";
                $result=mysqli_query($con,$sql);
                while ($row = mysqli_fetch_assoc($result)){
					     $a++;
                }
        }
   if($a != 0){
    echo "You have already purchase below things";
    $con=mysqli_connect("localhost","root","","fg_pass");
    $con1=mysqli_connect("localhost","root","","productdb");
    $id1 = $_SESSION['user_id'];
    $slq = "SELECT * FROM `purchase` WHERE `user_id`='$id1'";
    $result = mysqli_query($con,$slq);
    while($row = mysqli_fetch_assoc($result)){
        $slq1 = "SELECT * FROM `producttb` WHERE id='$row[product_id]'";
        $result1 = mysqli_query($con1,$slq1);
        $row1 = mysqli_fetch_assoc($result1);
        MyAccount($row1['product_image'],$row['product_name'],$row['product_price'],$row['product_id']);

    }
   }
   else{
     echo "You Have Not purchase Any Thing From Gada Electronics";
   }
    echo "</center>";
?>

<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border-radius: 10px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.invoice-print:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center><a href="cart.php"><button class="button invoice-print" id="invoice-print" ><i class="fa fa-print"></i> Visit Your Cart Here</button></a></center>
</body>
</html>