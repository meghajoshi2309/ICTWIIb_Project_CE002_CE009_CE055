<?php
    session_start();
    include ('links(1).php');
    require_once('component.php');
    $con=mysqli_connect("localhost","root","","productdb");
    $con1=mysqli_connect("localhost","root","","fg_pass");
    //  require_once('createDb.php');
    require_once('dbcon.php');
    // require_once('navigation_bar.php');

    // $database=new createdb("Productdb","producttb");
    if(isset($_POST['add']))
    {
        
        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'], "product_id");
            //print_r($item_array_id);
    
            if(in_array($_POST['product_id'], $item_array_id))
            {
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'ac.php'</script>";
            }
            else
            {
    
                $count = count($_SESSION['cart']);
                $item_array = array(
                    "product_id" => $_POST['product_id'],
                    "quantity" => 1,
                    "product_price" => $_POST['product_price']
                );
                

                $_SESSION['cart'][$count] = $item_array;
                // print_r($_SESSION['cart']);
               $email=$_SESSION['email'];
              // echo $email;
               $username=$_SESSION['username'];
                
                // $p_id=$_POST['product_id'];
                // $q1="SELECT `product_name` FROM `producttb` WHERE `id`='$p_id'";
                // if($product_name=mysqli_query($con,$q1))
                // {
                //     echo "yes yes yes";
                // }


                
                //foreach($_SESSION['cart'] as $key => $value)
                //{
                    $id1=$_SESSION['user_id'];
                    $id=$_POST['product_id'];
                    $email=$_SESSION['email'];
                   // echo $id;
                    $con=mysqli_connect("localhost","root","","productdb") or die(mysqli_error($con));	  

                    $sql = "SELECT * from producttb WHERE id='$id'";
                    $result = mysqli_query($con,$sql);
                    $a=0;
                    while($r=mysqli_fetch_row($result))
                    {
                      //  echo $r['1']."<br/>" ;
                    	
                       
                        $price=$_POST['product_price'];
                        
                       // echo $price." ";
                        //echo $id." ";
                        //echo "<br>"."<br>"."$id $username $email $r[1] $id $price ";
                        $a++;
                        if($a=1){
                      
                        $con1=mysqli_connect("localhost","root","","fg_pass");
                        $query="INSERT INTO `item`(`id`,`name`, `email`, `product_name`, `product_id`, `product_price`, `quantity`) VALUES ('$id1','$username','$email','$r[1]','$id','$price','1')";
                        $q2=mysqli_query($con1,$query);
                        }
                        
                    }
                //}
                // print_r($_SESSION['cart']);
                // echo $product_name;
                // echo $p_id;
                // echo $product_price;
                // echo $quantity;

                
                
            
            }
        
        }else{
    
            $item_array = array(
            "product_id" => $_POST['product_id'],
            "quantity" => 1,
            "product_price" => $_POST['product_price']
            );
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
          //  print_r($_SESSION['cart']);
            $id1=$_SESSION['user_id'];
                    $id=$_POST['product_id'];
                    $email=$_SESSION['email'];
                    $username = $_SESSION['username'];
                   // echo $id;
                    $con=mysqli_connect("localhost","root","","productdb") or die(mysqli_error($con));	  

                    $sql = "SELECT * from producttb WHERE id='$id'";
                    $result = mysqli_query($con,$sql);
                    $a=0;
                    while($r=mysqli_fetch_row($result))
                    {
                       // echo $r['1']."<br/>" ;
                    	
                       
                        $price=$_POST['product_price'];
                        
                       // echo $price." ";
                       // echo $id." ";
                      //  echo "<br>"."<br>"."$id $username $email $r[1] $id $price ";
                        $a++;
                        if($a=1){
                        
                        $con1=mysqli_connect("localhost","root","","fg_pass");
                        $query="INSERT INTO `item`(`id`,`name`, `email`, `product_name`, `product_id`, `product_price`, `quantity`) VALUES ('$id1','$username','$email','$r[1]','$id','$price','1')";
                        $q2=mysqli_query($con1,$query);
                        
                        }
                    }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/solid.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />

  <style>

  
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
</head>
<body class="bg-grey">

<?php require_once('navigation_bar.php');?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;





<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
    <form action="#" method="post">
      <span class="logo"><img src="https://images-na.ssl-images-amazon.com/images/I/71YlH-4MUQL._SX679_.jpg" width="100%"></span>
    </div>
    <div class="col-sm-8">
    &nbsp;&nbsp;
   
     <center> <strong><h2>New Apple iPhone 12 Pro (256GB) - Graphite</strong><br></h2>
     <h4><a src="https://www.apple.com/uk/iphone-12/">visit the apple store</a></h4>
      <h3 style=" text-decoration-line: line-through; ">M.R.P.:	₹ 1,29,900.00<br></h3>
<h3>Price:	₹ 1,23,400.00<br>

Inclusive of all taxes</h3>   
<input type='hidden' name='product_id' value='84'>

      <input type='hidden' name='product_price' value='123400'>
      <button type='submit' class='btn btn-warning my-3' name='add'>Add to cart<i class='fas fa-shopping-cart'></i></buttton>
      
      </form>
    </div>
  </div>
</div>



</body>
</html>