<?php
     //require("connection.php");
    $con=mysqli_connect("localhost","root","","productdb");
    
    session_start();
    session_regenerate_id(true);
    // if(!isset($_SESSION['AdminLoginId']))
    // {
    //     header("location: admin_login.php");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Admin Panel</title>
    <style>
    body
    {
        margin: 0;
    }
    div.header{
        color: #f0f0f0;
        font-family: poppins;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 0 60px;
        background-color: #1c1c1e;
    }
    div.header button{
        background-color: #f0f0f0;
        font-size: 16px;
        font-weight: 550;
        padding: 8px 12px;
        border: 2px solid black;
        border-radius: 5px;
    }
    </style>
</head>
<body>
    <div class="header">
    <h2 class="text-center text-white bg-dark">
    ADMIN PANEL
    </h2>
    <form action="admin_panel.php" method="POST">
    <button type="submit" name="Logout">LOG OUT</button>
    </form>
    </div>

    <div class="container mt-5">
    <div class="row">
    <div class="col-lg-12">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Pay Mode</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $query="SELECT * FROM `order_manager` WHERE 1";
        $user_result=mysqli_query($con,$query);
        
        
        while($user_fetch=mysqli_fetch_assoc($user_result))
        {
            
            echo "
            <tr>
            <td>$user_fetch[Order_id]</td>
            <td>$user_fetch[Full_Name]</td>
            <td>$user_fetch[Phone_No]</td>
            <td>$user_fetch[Address]</td>
            <td>$user_fetch[Pay_Mode]</td>
            <td>order...</td>
            </tr>
            ";
        }

    ?>
    
  </tbody>
</table>
    </div>
    </div>
    </div>

<?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location: admin_login.php");
    }
?>
</body>
</html>