<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>dashboard</title>
     <link rel="stylesheet" href="styles/bootstrap-337.min.css"> 
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css"> 
     <link rel="stylesheet" href="styles/style.css"> 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="
        https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="top">
        <!-- Top Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="col-md-6 offer">
                <!-- col-md-6 offer Begin -->
                <a href="index10.php" class="navbar-brand home">
                    <!-- navbar-brand home start -->

                    <a class="navbar-brand" href="index10.php" style="margin-left : -50%;margin-top : 2%;"><h1>Gada Electronics</h1></a>
                    


                </a> <!-- navbar-brand home Finish -->
                <?php error_reporting(E_ERROR | E_PARSE);session_start(); ?> 
                <a href="#" class="btn btn-success btn-sm" style="margin-left : 25%;margin-top : 3%;"><h5>Welcome <?php echo $_SESSION['username'];  ?></h5></a>
               <?php if (isset($_SESSION['user_id'])){
                        //$product_id = array_column($_SESSION['cart'], 'product_id');
                        $con=mysqli_connect("localhost","root","","fg_pass");
                        $sql="SELECT * FROM `item` WHERE `name`='$_SESSION[username]'";
                        $result=mysqli_query($con,$sql);
                        $total=0;
                        $count = 0;
                        
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                           $sql1="SELECT * FROM `producttb` WHERE `id`='$row[product_id]'";
                           $con1=mysqli_connect("localhost","root","","productdb");
                           $result1=mysqli_query($con1,$sql1);
                           while($row1=mysqli_fetch_assoc($result1)){
                         
                           $total += $row1['product_price'];
                           $count += 1;
                           
                           }

                        }
                     
                    
               }
               else{
                   echo "yes";
               }
               
                ?>
                <a href="cart.php" style="margin-top : 30%;"><?php echo "$count item in your cart | Rs. $total "; ?></a>

            </div><!-- col-md-6 offer Finish -->

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <ul class="menu">
                    <!-- cmenu Begin -->
                    &emsp;       
                       &emsp; 

                    <li>
                        <a href="registration1.php">Register</a>
                    </li>
                    <li>
                        <a href="myaccount.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>

                </ul><!-- menu Finish -->

            </div><!-- col-md-6 Finish -->

        </div><!-- container Finish -->

    </div><!-- Top Finish -->

   <?php require_once('navbar.php');?>

       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;       
                       &emsp;      
                       &emsp;   

  

    <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
           
           <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                   <div class="item active">
                       
                       <a href="tv.php"><img src="slide1.png" alt="Slider Image 1"></a>
                       
                   </div>
                   
                   <div class="item">
                       
                       <a href="camera.php"><img src="slide2.png" alt="Slider Image 2"></a>
                       
                   </div>
                   
                   <div class="item">
                       
                       <a href="tv.php"><img src="slide3.png" alt="Slider Image 3"></a>
                       
                   </div>
                   
                   <div class="item">
                       
                      <a href="smart.php"><img src="slide4.png" alt="Slider Image 4"></a>
                       
                   </div>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
     
   &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;       
                       &emsp;      
                       &emsp;     
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;       
                       &emsp;      
                       &emsp;     
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;       
                       &emsp;      
                       &emsp;     
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;       
                       &emsp;      
                       &emsp;     
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;       
                       &emsp;      
                       &emsp;   
                       
  
   <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                   &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;   
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;   
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->

                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;        
                       &emsp;      
                       &emsp;  
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;        


                       
                       <h3><a href="product.php">Best Offer</a></h3>
                       
                       <p>Visit Our Best Offer Over Here.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                   &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;    &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;   
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;        
                       &emsp;      
                       &emsp;  
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;    
                       
                       <h3><a href="product1.php">Best Prices</a></h3>
                       
                       <p>Here You Get Prices and Best deals.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                   &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;   
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;   
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;        
                       &emsp;      
                       &emsp;  
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;       
                       &emsp;      
                       &emsp;       
                       &emsp;     
                       &emsp;  
                       
                       <h3><a href="product2.php">100% Original</a></h3>
                       
                       <p>Get 100% Original Producs From Our Best Selars.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- #advantages Finish -->
   <?php require_once('new.php');?>
   <?php require_once('footer.php');?>
   






