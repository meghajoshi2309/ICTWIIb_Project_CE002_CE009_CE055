<?php session_start(); ?>

<html>
<head>
<style>
body{margin-top:20px;
background:#eee;
}
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


/*Invoice*/
.invoice .top-left {
    font-size:65px;
	color:#3ba0ff;
}

.invoice .top-right {
	text-align:right;
	padding-right:20px;
}

.invoice .table-row {
	margin-left:-15px;
	margin-right:-15px;
	margin-top:25px;
}

.invoice .payment-info {
	font-weight:500;
}

.invoice .table-row .table>thead {
	border-top:1px solid #ddd;
}

.invoice .table-row .table>thead>tr>th {
	border-bottom:none;
}

.invoice .table>tbody>tr>td {
	padding:8px 20px;
}

.invoice .invoice-total {
	margin-right:-10px;
	font-size:16px;
}

.invoice .last-row {
	border-bottom:1px solid #ddd;
}

.invoice-ribbon {
	width:85px;
	height:88px;
	overflow:hidden;
	position:absolute;
	top:-1px;
	right:14px;
}

.ribbon-inner {
	text-align:center;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	position:relative;
	padding:7px 0;
	left:-5px;
	top:11px;
	width:120px;
	background-color: #4CAF50;
	font-size:15px;
	color:#fff;
}

.ribbon-inner:before,.ribbon-inner:after {
	content:"";
	position:absolute;
}

.ribbon-inner:before {
	left:0;
}

.ribbon-inner:after {
	right:0;
}

@media(max-width:575px) {
	.invoice .top-left,.invoice .top-right,.invoice .payment-details {
		text-align:center;
	}

	.invoice .from,.invoice .to,.invoice .payment-details {
		float:none;
		width:100%;
		text-align:center;
		margin-bottom:25px;
	}

	.invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
		font-size:22px;
	}

	.invoice .btn {
		margin-top:10px;
	}
}

@media print {
	.invoice {
		width:900px;
		height:800px;
	}
}
</style>
<script>
function printme() {
		window.print();
	}
</script>
</head>
<body>
<img src="logo1.jfif" height="100" width="300">
<!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">-->
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-sm-12">
	  	<div class="panel panel-default invoice" id="invoice">
		  <div class="panel-body">
			<div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div>
		    <div class="row">

				<div class="col-sm-6 top-left">
					<i class="fa fa-rocket"></i>
				</div>

				<div class="col-sm-6 top-right">
						<h3 class="marginright">Gada Electronics</h3>
						<span class="marginright"><?php echo date(DATE_RFC822) . "<br>"; ?></span>
			    </div>

			</div>
			<hr>
			<div class="row">

				<div class="col-xs-4 from">
					<p class="lead marginbottom">To : <?php echo $_SESSION['firstname']; ?></p>
                    <hr>
					<p>Address : <?php echo $_SESSION['address']; ?></p>
                    <hr>
					<p>Email : <?php echo $_SESSION['email']; ?></p>
                    <hr>
				</div>


		

			<div class="row table-row">
				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th class="text-center" style="width:5%">#</th>
			          <th class="text-center" style="width:5%">Item</th>
			          
			          <th class="text-center" style="width:5%">Total Price</th>
			        </tr>
			      </thead>
</body>
<?php


require_once ("CreateDb.php");
require_once ("component.php");
require_once ("dbcon.php");
$db = new CreateDb("Productdb", "Producttb");
$con = mysqli_connect("localhost","root","","fg_pass");
?>


        <?php
		
            $_SESSION['total'] = 0;
			$a=0;
            if (isset($_SESSION['cart'])){
				// $product_id = array_column($_SESSION['cart'], 'product_id');
				$con = mysqli_connect("localhost","root","","fg_pass");
				$id1=$_SESSION['user_id'];
                $sql="SELECT * FROM `purchase` WHERE user_id='$id1'";
                $result=mysqli_query($con,$sql);
                while ($row = mysqli_fetch_assoc($result)){
					$a++;

					if (isset($_SESSION['purchase'])){
						$product_name = array_column($_SESSION['purchase'], 'product_name');
						foreach($product_name as $name){
							//if($row['id']){

							//}
						}
					
					}

                    //   $total = 0;
                    // if (isset($_SESSION['cart'])){
                    //     $product_id = array_column($_SESSION['cart'], 'product_id');

                    //     $result = $db->getData();
                    //     while ($row = mysqli_fetch_assoc($result)){
                    //         foreach ($product_id as $id){
                    //             if ($row['id'] == $id){
                    //                 cartElement($row['product_image'], $row['product_name'],$row['product_price'], $
			?>

			        <tr>
			          <td class="text-center" style="width:5%"><?php echo $a ?></td>
			          <td class="text-center" style="width:5%"><?php echo $row['product_name'] ?></td>
			          
			          <td class="text-center" style="width:5%"><?php echo $row['product_price'] ?></td>
			          
			        </tr>
					
        <?php
				
					$_SESSION['total'] += $row['product_price'];
				
					 
                }
				
            }
			
			

		
        ?>
			        
			       </body>
			    </table>

			</div>
			<center> <p>
					<?php 
					  	 echo "<h4>"."Total Amout Paid Is : " ;
					  	 echo "Rs.".$_SESSION['total']; 
					?>
			</p></center>

			<div class="row">
			<div class="col-xs-6 margintop">
				<p class="lead marginbottom">THANK YOU!</p>

				<a href="pdf.php" download><button class="button invoice-print" id="invoice-print" ><i class="fa fa-print"></i> Print Invoice</button></a>
				<a href="index10.php"><button class="button invoice-print" id="invoice-print" ><i class="fa fa-print"></i> Back To Home</button></a>
				<a href="rating.php"><button class="button invoice-print" id="invoice-print" ><i class="fa fa-print"></i> Rate Us</button></a>
				<!--<button class="btn btn-success" id="invoice-print" >-->
			</div>
			<!--<div class="col-xs-6 text-right pull-right ">-->
			         
						

			<!--</div>-->
			</div>

		  </div>
		</div>
	</div>
</div>
</div>
</body>
</html>