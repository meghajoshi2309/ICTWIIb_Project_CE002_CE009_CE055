<?php
    session_start();
    include ('links(1).php');
    require_once('component.php');
    $con=mysqli_connect("localhost","root","","productdb");
    $con1=mysqli_connect("localhost","root","","fg_pass");
    //  require_once('createDb.php');
    require_once('dbcon.php');
    require_once('navigation_bar.php');

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
                //  print_r($_SESSION['cart']);
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
                  //  echo $id;
                    $con=mysqli_connect("localhost","root","","productdb") or die(mysqli_error($con));	  

                    $sql = "SELECT * from producttb WHERE id='$id'";
                    $result = mysqli_query($con,$sql);
                    while($r=mysqli_fetch_row($result))
                    {
                       // echo $r['1']."<br/>" ;
                    	
                       
                        $price=$_POST['product_price'];
                        
                       // echo $price." ";
                       // echo $id." ";
                        
                        if($a=1)
                        $con1=mysqli_connect("localhost","root","","fg_pass");
                        $query="INSERT INTO `item`(`id`,`name`, `email`, `product_name`, `product_id`, `product_price`, `quantity`) VALUES ('$id1','$username','$email','$r[1]','$id','$price','1')";
                        $q2=mysqli_query($con1,$query);
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides 
    {
        width: 120%;
        display:none;
        background: white;
    }
    </style>
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row text-center py-5">
            <?php 
                 $sql="SELECT * FROM `producttb` WHERE `categories`='laptop'";
                 $con=mysqli_connect("localhost","root","","productdb");
                 $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                    component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
                }
            ?>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 

<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="./images/sl4.png" style="width:200%;">
  <img class="mySlides" src="./images/sl5.png" style="width:200%;">
  <img class="mySlides" src="./images/sl6.png" style="width:200%;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>