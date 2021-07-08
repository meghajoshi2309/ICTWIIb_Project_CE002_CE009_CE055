<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping cart</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/solid.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        <link rel="stylesheet" href="
        https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <style>
    /*  Footer Styles  */

#footer{
    background: #e0e0e0;
    padding: 20px 0;
}
#footer a{
    color: #999999;
    padding: 0;
    text-decoration: none;
}
#footer a:hover{
    color: #666666;
}
#footer ul{
    list-style: none;
    padding-left: 0px;
}
#footer .social{
    text-align: left;
}
#footer .social a{
    margin: 0px 10px 0px 0px;
    display: inline-block;
    color: #ffffff;
    width: 30px;
    height: 30px;
    border-radius: 15px;
    line-height: 30px;
    font-size: 15px;
    text-align: center;
    vertical-align: bottom;
    background: #555555;
    text-decoration: none;
}
#footer .social a:hover{
    color: #dedede;
    background: #777777;
}

/*  Copyright Styles  */

#copyright{
    background: #333333;
    color: #cccccc;
    padding: 20px 0px;
    font-size: 12px;
}
#copyright p{
    margin: 0px;
}




    </style>







</head>








<body>

   <div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
              <h4> PAGES </H4> 
            <ul>
                <li><a href="cart.php">shopping cart</a></li>
                <li><a href="contact.php">contact us</a></li>
                <li><a href="index10.php" >shop</a></li>
                <li><a href="myaccount.php">My Account</a></li>
            </ul>
            
            <hr>
            <h4>User Section</h4>
            <ul>
                <li><a href="registration.php">registration</a></li>
            </ul>
             
             <hr class="hidden-md hidden-lg hidden-sm">
            </div>
           <div class="col-md-6 col-md-3">
            <h4>Top Product Categories</h4> 
            <ul>
            <li><a href="tv.php"> TV</a></li>
            <li> <a href="laptop.php">LAPTOP</a></li>
            <li> <a href="mobile.php">MOBILE</a></li>
            <li><a href="ac.php">AC</a></li>
            <li> <a href="watch.php">WATCH</a></li>
            <li> <a href="camera.php">CAMERA</a></li>
            <li>      <a href="smart.php">SMART TECNOLOGY</a></li>
            <li>     <a href="headphone.php">HEADPHONE</a></li>

            </ul>
              
           </div>
           <div class="col-md-6 col-md-3">
            <h4>Find us:</h4>
              <p>
                 
                 <strong>GADA ELECTRONICS</strong>
                 <ul>
                <li><a href="rating.php">Rate Us</a></li>
                <li><a href="contact.php">contact us</a></li>
                
                </ul>
              </p>
              <a href="contact.php">Check our contact page</a>
              <hr class="hidden-md hidden-lg hidden-sm">
           </div>
           <div class="col-md-6 col-md-3">
               <h4>Get the news</h4>
               <p class="text-muted">
                    Dont miss our latest update products.
                </p>
                
                <form action="" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="contact.php" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2021 GADA ELECTRONICS All Rights Reserve</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme by: <a href="#">NO ONE</a></p>
            

            </div>
        </div>
    </div>
</div> 


</body>
</html>