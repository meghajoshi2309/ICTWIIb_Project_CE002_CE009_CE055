<?php
  session_start();
  $a=0;
  if(isset($_POST['submit'])){
  $_SESSION['email']=$_POST['email'];
  $_SESSION['firstname']=$_POST['firstname'];
  $_SESSION['address']=$_POST['address'];
  
  $con=mysqli_connect("localhost","root","","fg_pass");
  $id1=$_SESSION['user_id'];
  $sql1="SELECT * FROM `item` WHERE id='$id1'";
  
  if($result1=mysqli_query($con,$sql1)){
    echo "yes";
    }
  while($row1=mysqli_fetch_assoc($result1)){
    $a++;
    echo "klk";
    echo $row1['product_id'];
    echo $row1['product_name'];
    echo $row1['product_price'];
    echo $row1['id'];
  $slq="INSERT INTO `purchase`(`product_id`, `product_name`, `product_price`, `user_id`) VALUES ('$row1[product_id]','$row1[product_name]','$row1[product_price]','$row1[id]')";
  $result=mysqli_query($con,$slq);
  $id1 = $_SESSION['user_id'];
  $slq2 = "DELETE FROM `item` WHERE id= '$id1'";
  $result2= mysqli_query($con,$slq2);
  if($a==1){
  if(isset($_SESSION['purchase'])){
    $count = count($_SESSION['purchase']);
                $item_array = array(
                    "product_name" =>  $row1['product_name'],
                  
                    "product_price" => $row1['product_price'],
                );
    
                $_SESSION['purchase'][$count] = $item_array;
                 print_r($_SESSION['purchase']);
              }
              else{
    
                $item_array = array(
                  "product_name" =>  $row1['product_name'],
                  
                  "product_price" => $row1['product_price'],
                );
        
                // Create new session variable
                $_SESSION['purchase'][0] = $item_array;
               
            }
           
  }
}
  
  print_r($_SESSION['purchase']); 
                
    
            
    
        
    
  header("location:bill.php");
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: green;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: lightgreen;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="#" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" required value="<?php echo $_SESSION['username']?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']?>" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" required>
              </div>
              <div class="col-50">
                <label for="zip">Pincode</label>
                <input type="text" id="zip" name="zip" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname"><i class="fa fa-credit-card"></i>Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="name on card" required>
            <label for="ccnum"><i class="fa fa-credit-card"></i> Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth"><img src="Screenshot 2021-05-08 091444.png" height= 16px width=14px> Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear"><img src="Screenshot 2021-05-08 092552.png" style="filter: brightness(85%)" height= 17px width=17px> Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv"><img src="Screenshot 2021-05-08 091911.png" style="filter: brightness(90%)" height= 17px width=17px> CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>