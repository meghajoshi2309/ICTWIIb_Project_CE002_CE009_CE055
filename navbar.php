<?php
 if(isset($_POST['add']))
 {
   //SELECT `id`, `product_name`, `product_price`, `product_image`, `quantity`, `categories` FROM `producttb` WHERE `categories` ='camera'
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover{
  background-color: #ddd;
  color: black;
  text-decoration: none;

}

.topnav a.active {
  /* background-color: #04AA6D; */
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 10px;
  margin-top: 12px;
  font-size: 30px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index10.php" class="active">Home</a>
   <a href="tv.php">TV</a>
       <a href="laptop.php">LAPTOP</a>
        <a href="mobile.php">MOBILE</a>
        <a href="ac.php">AC</a>
               <a href="watch.php">WATCH</a>
                  <a href="camera.php">CAMERA</a>
                   <a href="smart.php">SMART TECNOLOGY</a>
                    <a href="headphone.php">HEADPHONE</a>
                    <div class="topnav">
 
 <div class="search-container">
   <form action="action_page.php" method="POST"> 
     <input type="text" placeholder="Search.." name="search" style="margin-top: 2.5%; margin-left:70%">
     <button type="submit" style="margin-top: 2.5%; "><i class="fa fa-search"></i></button>
   </form>
 </div>
</div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
