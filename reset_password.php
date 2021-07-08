<?php session_start();
ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include 'links(1).php';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
        if(isset($_GET['token']))
        {
            $token=$_GET['token'];
        $newpassword=mysqli_real_escape_string($con,$_POST['password']);
        $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

        $pass=password_hash($newpassword, PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword, PASSWORD_BCRYPT);
          
        if($newpassword===$cpassword)
        {
            $updatequery="update user_info set password='$pass' where token='$token' ";
            $iquery = mysqli_query($con,$updatequery);
            if($iquery)
            {
                $_SESSION['msg']="Your password has been updated";
                header('location:login.php');
            }
            else
            {
                $_SESSION['passmsg']="Your password is not updated";
                header('location:reset_password.php');
            }
        }
        else
        {
            $_SESSION['passmsg']="Password are not matched";
        }
        }
        else
        {
            echo "No token found";
        }
        
    }
    ?>
     <div class="card bg-light">
     <artical class="card-body mx-auto" style="max-width:400px;">
     <h4 class="card-title mt-3 text-center">Create Account</h4>
     <p class="text-center">Get started with your free account</p>
     <p class="bg-info text-white px-5"><?php 
     if(isset($_SESSION['passmsg']))
     echo $_SESSION['passmsg'];
     else
     $_SESSION['passmsg']=""; ?></p>
     <form method="POST" action="">
     
    
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-key"></i></span>
     </div>
     <input type="password" name="password" id="password-field" class="form-control" placeholder="New password" minlength="6" maxlength="10" required>
     </div>
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-lock"></i></span>
     </div>
     <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required>
     </div>
     <div class="form-group">
     <button type="submit" name="submit" class="btn btn-primary btn-block">Update Password</button>
     </div>
     <p class="text-center">Already have an account?<a href="login.php">Log in</a></p>
     </form>
     </artical>
     </div>
     </div>
     </div>
</body>
</html>