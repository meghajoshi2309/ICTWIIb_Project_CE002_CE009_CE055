<?php session_start(); ?>
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
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
        $username=mysqli_real_escape_string($con,$_POST['username']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
        $token=bin2hex(random_bytes(15));
              
        $pass=password_hash($password, PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery="select * from user_info where email='$email' ";
        $query=mysqli_query($con,$emailquery);

        $emailcount=mysqli_num_rows($query);

        $username_query="select * from user_info where username='$username'";
        $query1=mysqli_query($con,$username_query);

        $username_count=mysqli_num_rows($query1);

        if($username_count>0)
        {
            $message="username is already exists.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else if($emailcount>0)
        {
            $message="email is already exists.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {  
            if($password===$cpassword)
            {
               $_SESSION['username']=$username;
               echo $_SESSION['username'];
                // $table="CREATE TABLE $username (
                    
                //     product_id INT NOT NULL PRIMARY KEY,
                //     product_name VARCHAR(70) NOT NULL,
                //     product_catagory VARCHAR(70) NOT NULL,
                //     price INT NOT NULL,
                //     avialabel_product INT NOT NULL,
                //     required_product INT NOT NULL  
                // )";
                // if($con->query($table)===true)
                // {
                //     echo "table";
                // }
                $insertquery= "insert into user_info(username,email, password, cpassword,token,status) values('$username','$email','$pass','$cpass','$token','inactive')";
                $iquery = mysqli_query($con,$insertquery);
                if($query)
                {
                    // $message="You are successfully loged in!Welcome in our website.";
                    // echo "<script type='text/javascript'>alert('$message');</script>";
                    // header("location:home.php");
                    $subject="Email Activation";
                    $body="Hi, $username. Click here to activate your account 
                    http://localhost/php12/forgot_password/activate.php?token=$token ";
                    $sender_email="From: laddiya22@gmail.com";

                    if(mail($email,$subject,$body,$sender_email))
                    {
                        
                        $_SESSION['msg']="check your mail to activate your account $email";
                        header("location:login.php");
                    }
                    else
                    {
                        echo "Email sending failed..";
                    }
                }
                else
                {
                    echo "Sorry!something went wrong.No connection";
                }
            }
            else
            {
                $message="Enter same password.";
                echo "<script type='text/javascript'>alert('$message');</script>";

            }
        }
    }
    ?>
    <center><img src="logo1.jfif"></center>
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
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-user"></i></span>
     </div>
     <input type="text" name="username" class="form-control" placeholder="Enter your full name" required>
     </div>
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-envelope"></i></span>
     </div>
     <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
     </div>
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-key"></i></span>
     </div>
     <input type="password" name="password" id="password-field" class="form-control" placeholder="Enter your password" minlength="6" maxlength="10" required>
     </div>
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-lock"></i></span>
     </div>
     <input type="password" name="cpassword" class="form-control" placeholder="Reenter your password" required>
     </div>
     <div class="form-group">
     <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
     </div>
     <p class="text-center">Already have an account?<a href="login.php">Log in</a></p>
     </form>
     </artical>
     </div>
     </div>
     </div>
</body>
</html>