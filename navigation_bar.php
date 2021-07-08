<!DOCTYPE html>
<html>
<head>
  <?php include ('links(1).php'); ?>
	<title>Bootstrap 4 Search Bar Menu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <style>
    nav ul{
    float: right;
    margin-right: 20px;
    }
    nav ul li{
        display: inline-block;
        line-height: 80px;
        margin: 0 5px;
    }
    .navbar-brand{
    color: white;
    font-size: 25px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
    }
    nav ul{
    float: right;
    margin-right: 20px;
    }
    nav ul li{
        display: inline-block;
        line-height: 80px;
        margin: 0 5px;
    }
    nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;}
    body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    
  </style>
  
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="index10.php">Gada Electronics</a>
 
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link" href="index10.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="tv.php">TV</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="laptop.php">Laptop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="mobile.php">Mobile</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="ac.php">AC</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="watch.php">Watch</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="camera.php">Camera</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="smart.php">Smart Tech</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="headphone.php">Headphone</a>
				</li>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                         <?php
                          if (isset($_SESSION['user_id'])){
                            $sql="SELECT * FROM `item` WHERE `name`='$_SESSION[username]'";
                            $result=mysqli_query($con,$sql);
                            $total=0;
                            
                            $xyz=0;
                            while($row=mysqli_fetch_assoc($result))
                            {
                              $con1=mysqli_connect("localhost","root","","productdb");
                               $sql1="SELECT * FROM `producttb` WHERE `id`='$row[product_id]'";
                              
                               $total = 1;
                               $xyz += 1;
                               $result1=mysqli_query($con1,$sql1);
                          
                              //$total = 1;
                               
                            }
                           
                          }
                          
                          if($xyz == 0 && $total == 0){
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                          }
                          else if($xyz == 0 && $total == 1){
                            $xyz++;
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">1</span>";
                          }
                          else {
                            $xyz++;
                          echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$xyz</span>";
                          }
                           

                        // if (isset($_SESSION['cart'])){
                            
                        //     $count = count($_SESSION['cart']);
                        //     echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        // }else{
                        //     echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        // }

                        ?> 
                    </h5>
                </a>
            </div>
        </div>
        
			</ul>

		</div>
	</nav>
  
</body>
</html>