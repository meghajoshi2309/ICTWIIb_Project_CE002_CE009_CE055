<html>
<head>
<style>
.buttonA { 
background-color: Red;  
border: none; 
border-radius: 5%;
color: white; 
padding: 12px 70px; 
text-align: center; 
text-decoration: none; 
display: inline-block; 
margin: 2px 6px; 
cursor: pointer; 
font-size:20px; 
} 
</style>
</head>
</html>


<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];

 



  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="buttonA" >'.'<i class="fab fa-google"></i>'.'  Login With Google'.'</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
  <div class="container">
   <br />
   <!-- <h2 align="center">PHP Login using Google Account</h2> -->
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    $con=mysqli_connect("localhost","root","","fg_pass");
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    $username=$_SESSION['user_first_name'];
    $email=$_SESSION['user_email_address'];
    $insertquery= "insert into user_info(username,email,status) values('$username','$email','active')";
    $iquery = mysqli_query($con,$insertquery);
     header("location:index10.php");
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';

 

    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo "<center>"."<img src='logo1.jfif'>"."</center>";
    echo '<div align="center"  style=" text-decoration: none;">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
     <?php include 'links(1).php' ?> 
    <style>

    </style>
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
                header("location:index10.php");
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
  <?php   if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="btn btn-block btn-danger btn-gmail">Login With Google</a>';
}
//  <a href="" class="btn btn-block btn-danger btn-gmail"><i class="fab fa-google"></i></i>
//      Login via Gmail</a>
//      </p>
     ?>
     <p class="divider-text text-center">
     <span class="bg-light">OR</span>
     </p>
     <div>
     <p class="bg-success text-white px-4"> <?php 
     if(isset($_SESSION['msg'])){
     //echo $_SESSION['msg'];
     }else
     {
        //  $_SESSION['msg']="You are logged out. please login again";
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