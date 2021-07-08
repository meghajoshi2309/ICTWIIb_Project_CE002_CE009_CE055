<?php

session_start();

require_once ("CreateDb.php");
require_once ("component.php");

$db = new CreateDb("Productdb", "Producttb");
$con=mysqli_connect("localhost","root","","fg_pass");
$con1=mysqli_connect("localhost","root","","productdb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              $slq = "DELETE FROM `item` WHERE `product_id`='$_GET[id]' AND `name`='$_SESSION[username]'";
              mysqli_query($con,$slq);

              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}

  

?>

<!doctype html>
<html lang="en">
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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<?php
    require_once ('header.php');
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>

                <?php

                
                    if (isset($_SESSION['user_id'])){
                        //$product_id = array_column($_SESSION['cart'], 'product_id');
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
                           cartElement($row1['product_image'],$row1['product_name'],$row1['product_price'],$row1['id']);
                           $total += $row1['product_price'];
                           $count += 1;
                           }
                        }
                        
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                               // $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                            <td id="gt"></td>
                    </div>
                </div>
               
                <form action="chek.php" method="post">
                <input type="checkbox" id="cod" name="cod" value="cod">
                <label for="cod"> <h6>Cash On Delivery</h6></label><br>
                <button type='submit'class="button invoice-print" id="invoice-print" ><i class="fa fa-print"></i>Proceed To Payment</button>
                </form>
            </div>

        </div>
        
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<script>
      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');
      function subTotal()
      {
          gt=0;
          for(i=0 ; i<iprice.length ; i++)
          {
              itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
              gt=gt+(iprice[i].value)*(iquantity[i].value);
              document.write(itotal[i]);
          }
          gtotal.innerText=gt;
      }
      subTotal();
    </script>