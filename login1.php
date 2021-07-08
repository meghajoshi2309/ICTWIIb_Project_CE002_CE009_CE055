<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <?php include 'links(1).php' ?>
</head>
<body>

<?php
    include 'dbcon.php';

    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $email_search="select * from user_info where email='$email' and status='active' ";
        $query=mysqli_query($con,$email_search);

        $email_count=mysqli_num_rows($query);
        if($email_count)
        {
            $email_pass=mysqli_fetch_assoc($query);

            $db_pass=$email_pass['password'];
            $_SESSION['username']=$email_pass['username'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['user_id']=$email_pass['id'];
            $pass_decode=password_verify($password,$db_pass);

            if($pass_decode)
            {
                echo "Login Successful";
                echo  $_SESSION['user_id'];
                header("location:index.php");
            }
            else
            {
                echo "Invalid Password";
            }
        }
        else
        {
            echo "Invalid Email";
        }
    }
?>
<div class="card bg-light">
     <artical class="card-body mx-auto" style="max-width:400px;">
     <h4 class="card-title mt-3 text-center">Create Account</h4>
     <p class="text-center">Get started with your free account</p>
     <p> 
     <a href="" class="btn btn-block btn-danger btn-gmail"><i class="fab fa-google"></i></i>
     Login via Gmail</a>
     </p>
     <p class="divider-text text-center">
     <span class="bg-light">OR</span>
     </p>
     <div>
     <p class="bg-success text-white px-4"> <?php 
     if(isset($_SESSION['msg'])){
     echo $_SESSION['msg'];
     }else
     {
        echo $_SESSION['msg']="You are logged out. please login again";
     } ?> </p>
     </div>
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-envelope"></i></span>
     </div>
     <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
     </div>
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-key"></i></span>
     </div>
     <input type="password" name="password" id="password-field" class="form-control" placeholder="Enter your password" minlength="6" maxlength="10" required>
     </div>
     <div class="form-group">
     <button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
     </div>
     <p class="text-center">Forgot Your Password ? No Worry <a href="recover_email.php">Click Here</a></p>
     <p class="text-center">Not have an account? <a href="registration1.php">Sign Up</a> HERE</p>
     </form>
     </artical>
     </div>
     </div>
     </div>
</body>
</html>