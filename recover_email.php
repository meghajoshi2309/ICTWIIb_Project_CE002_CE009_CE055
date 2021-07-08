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
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
        $email=mysqli_real_escape_string($con,$_POST['email']);

        $emailquery="select * from user_info where email='$email' ";
        $query=mysqli_query($con,$emailquery);

        $emailcount=mysqli_num_rows($query);

        if($emailcount)
        {
            $userdata=mysqli_fetch_array($query);

            $username=$userdata['username'];
            $token=$userdata['token'];

            $subject="Password Reset";
            $body="Hi, $username. Click here to reset your password 
            http://localhost/php12/reset_password.php?token=$token ";
            $sender_email="From: laddiya22@gmail.com";

            if(mail($email,$subject,$body,$sender_email))
            {
                
                $_SESSION['msg']="check your mail to reset your password $email";
                header("location:login.php");
            }
            else
            {
                echo "Email sending failed..";
            }
                
        }
        else
        {
            echo "No Email Found";
        }
    }
    ?>
     <div class="card bg-light">
     <artical class="card-body mx-auto" style="max-width:400px;">
     <h4 class="card-title mt-3 text-center">Recover Your Account</h4>
     <p class="text-center">Please Fill Email Id Properly</p>
     
     
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     
     <div class="form-group input-group">
     <div class="input-group-prepend">
     <span class="input-group-text"><i class="fa fa-envelope"></i></span>
     </div>
     <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
     </div>
     
     
     <div class="form-group">
     <button type="submit" name="submit" class="btn btn-primary btn-block">Send Mail</button>
     </div>
     <p class="text-center">Have an account?<a href="login.php">Log in</a></p>
     </form>
     </artical>
     </div>
     </div>
     </div>
</body>
</html>