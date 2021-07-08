<?php
    include 'links(1).php';
    if(isset($_POST['submit']))
    {
        $to_mail="ladvaibhavi26@gmail.com";
        $subject="For Just Fun";
        $message=$_POST['message'];
        $user_mail=$_POST['email'];
        
        $sender_email="From: $user_mail";
        echo $sender_email;
        if(mail($to_mail,$subject,$message,$sender_email))
        {
            echo "sent successfully";
        }
        else
        {
            echo "Email sending failed..";
        }
    }
?>
<div class="card bg-light">
     <artical class="card-body mx-auto" style="max-width:400px;">
     <h4 class="card-title mt-3 text-center">Send Mail To Host</h4>
     
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
     <span class="input-group-text"><i class="fa fa-commenting" aria-hidden="true"></i></span>
     </div>
     <textarea rows="5" cols="30" name="message" class="form-control" placeholder="Enter your message"></textarea>
     </div>
     
     <div class="form-group">
     <button type="submit" name="submit" class="btn btn-primary btn-block">Send Mail</button>
     </div>
     </form>
     </artical>
     </div>
     </div>
     </div>