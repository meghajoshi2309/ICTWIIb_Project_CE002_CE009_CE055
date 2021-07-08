<?php 
     error_reporting(E_ERROR | E_PARSE);
    include ('links(1).php');
     require_once('navigation_bar.php');
     $con=mysqli_connect("localhost","root","","rating");
     if(mysqli_connect_error())
     {
         echo "cannot connect to database";
         exit();
     }
?>
<html>
  <head>
  <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">  
  <script src="https://kit.fontawesome.com/81ac83e5bf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style_ratings.css">
  </head>
  <body>
  &nbsp&nbsp<h1 style="color: white; text-align:center;">Rate Us</h1>
    <div class="main">
      <br><br><br>
     <div class="form_"> 
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <i class="fa fa-user fa-2x" class="icon" ></i>
        <input class="input-field" type="text" placeholder="Username" name="uname" required> <br><br>
        <i class="far fa-comment-alt icon fa-2x" style="margin-left : -1%;"></i>&nbsp&nbsp
        <textarea class="comment" placeholder="Your Message" rows="10" cols="31" name="comment"></textarea>
        <div class="ratings">
             <input type="radio" name="star" id="star1"  value="5" style="display : none;" required><label for="star1"></label>&nbsp&nbsp
             <input type="radio" name="star" id="star2"  value="4" style="display : none;"><label for="star2"></label>&nbsp&nbsp
             <input type="radio" name="star" id="star3"  value="3" style="display : none;"><label for="star3"></label>&nbsp&nbsp
             <input type="radio" name="star" id="star4"  value="2" style="display : none;"><label for="star4"></label>&nbsp&nbsp
             <input type="radio" name="star" id="star5"  value="1" style="display : none;"><label for="star5"></label>
        </div>
        <div class="submit_r">
          <br><br><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" class="btn btn-light btn-lg" name="submit" value="Give Ratings" >
        </div> 
      </form>
      </div>  
      <?php
        if(isset($_POST['submit']))
        {
          $rating=$_POST['star'];
          $username=$_POST['uname'];
          $comment=$_POST['comment'];
          $sql="INSERT INTO `ratings`(`user_id`, `comment`, `ratings`) VALUES ('$username','$comment','$rating')";
          mysqli_query($con,$sql);
        }
      ?> 
    
       
  </body>
  </div>  
</html>  
