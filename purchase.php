<?php
    session_start();
    $con=mysqli_connect("localhost","root","","productdb");
    if(mysqli_connect_error())
    {
        echo "<script>
        alert('cannot connect to database');
        window.location.href='cart.php';
        </script>";
        exit();
    }
    if($con)
    {
      echo "yes";
    }
    else {
      echo "no";
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['purchase']))
        {
            $query1="INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
            if(mysqli_query($con,$query1))
            {
              echo "yes";
                $Order_Id=mysqli_insert_id($con);
                $query2="INSERT INTO `order_item`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
                $stmt=mysqli_prepare($con,$query2);
                if($stmt)
                {
                    mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price);
                    foreach($_SESSION['cart'] as $key => $values)
                    {
                        $Item_Name=$values['Item_Name'];
                        $Price=$values['Price'];
                        $Quantity=$values['Quantity'];
                        mysqli_stmt_execute($stmt);
                    }
                    unset($_SESSION['cart']);
                    echo "<script>
                    alert('Order Placed');
                    window.location.href='index1.php';
                    </script>";
                }
                else
                {
                  echo "no";
                    // echo "<script>
                    // alert('SQL Query Prepare Error');
                    // window.location.href='cart.php';
                    // </script>";
                }
            }
            else
            {
                echo "no";
                // echo "<script>
                // alert('SQL Error');
                // window.location.href='cart.php';
                // </script>";
            }
        }
      }
?>