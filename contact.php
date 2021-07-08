<?php require("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>

<style>
.container-fluid{
    background: lightgray;
    background-size: cover;
    height: calc(100vh - 80px);
    
}
</style>
<?php
    error_reporting(E_ERROR | E_PARSE);
    if(mysqli_connect_error())
    {
        echo "cannot connect to database";
        exit();
    }
    include 'links(1).php';
    require_once('navigation_bar.php');
    if(isset($_POST['submit']))
    {
        $to_mail="laddiya22@gmail.com";
        $subject="For Just Fun";
        $message=$_POST['message'];
        $user_mail=$_POST['email'];
        $user_name=$_POST['username'];
        $query="insert into contact( `name`, `email`, `comment`) values ('$user_name','$user_mail','$message')";
        mysqli_query($con,$query);
        $sender_email="From: $user_mail";
        // echo $sender_email;
        if(mail($to_mail,$subject,$message,$sender_email))
        {
            echo "sent successfully";
        }
        else
        {
            echo "mail sending failed..";
        }
    }
?>


     <div class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5 my-5 md-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><i class="fas fa-user"></i> Megha <a href="https://www.linkedin.com/in/megha-joshi-b61655208/"><i class="fab fa-linkedin"></i></a></p>
      <p><i class="fas fa-user"></i> Vaibhavi <a href="https://www.linkedin.com/in/vaibhavi-lad-0ba987209/"><i class="fab fa-linkedin"></i></a></p>
      <p><i class="fas fa-user"></i> Diya <a href="https://www.linkedin.com/in/diya-lad-05300520a/"><i class="fab fa-linkedin"></i></a></p>
      <p><i class="fas fa-map-marker-alt"></i> Gujarat, India</p>
      </div>
    <div class="col-sm-7 my-5">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="username" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary pull-right" name="submit" type="submit">Send</button>
        </div>
      </div>
</form>
    </div>
  </div>
</div>
</body>
</html>
