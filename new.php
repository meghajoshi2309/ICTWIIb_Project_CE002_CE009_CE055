<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
 
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0px 5px 15px 5px;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
   background-image: none;
   color: white;
  }
  .carousel-indicators li {
    border-color: red;
  }
  .carousel-indicators li.active {
    background-color: black;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .image{
      
        width:80vw;
        height:25vh;
    }

  }
  </style>
</head>
<body>



<!-- Container (Portfolio Section) -->
<div class="container-fluid text-center bg-grey">
  <h2>Trending products</h2><br>
  <h4></h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href= "product.php" ><img src="https://images-na.ssl-images-amazon.com/images/I/518ha6z%2B9PL._SL1080_.jpg" alt="Paris" width="400" height="300">
        </a>
        <p>Dell Inspiron 5408 14 inch (35.56 cms) FHD 5000 Series Laptop (10th Gen i5-1035G1/8 GB/512 SSD/2 Gb NVIDIA MX 330 Graphics/Win 10 + MS Office/Pebble) D560210WIN9SE</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
       <a href="product2.php" > <img src="https://www.reliancedigital.in/medias/Nikon-VBK510UN-DSLR-Cameras-491431245-i-3-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w5MTIxOXxpbWFnZS9qcGVnfGltYWdlcy9oMGEvaGU2LzkxMTcwMTg1MjE2MzAuanBnfDRkMjg1ODBhYzZlMmU2N2U5OWMyYzA1NjY3M2Y1MmUwZGZkM2YzMzAwNDVkNDAwYjdmMzJhZDk2MWYwNDVhNjQ" alt="New York" width="400" height="300">
        
        <p><br></a>
        Nikon D7500 DSLR Camera with AF-S DX NIKKOR 18-140mm f/3.5-5.6G ED VR Lens<br><br></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
      <br>
        <a href="product1.php"><img src="https://www.reliancedigital.in/medias/Apple-12-Pro-Smartphones-491901558-i-1-1200Wx1200H?context=bWFzdGVyfGltYWdlc3wxMTAwNjV8aW1hZ2UvanBlZ3xpbWFnZXMvaDRhL2gxNS85NDA3ODAzMjYwOTU4LmpwZ3wxMmM0ZTFkZDcwZDc3ZTk0MmQxNjNhYjkzMzNiYWRjNWU2OTIxNzZmZWVmZGRhMTZjYTQ3MzUyMmU2NGM4Zjg1" alt="San Francisco" width="400" height="300">
        </a>
        <p>Apple iPhone 12 Pro 128 GB, Graphite<br><br><br>
</p>
      </div>
    </div>
  </div>

  <h2>Offers you can't refuse</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <h4><img class="image" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Laptops/GGD/June/Teaser/D23436262_IN_PC_Laptops-Grand-Gaming-Days-May_1500_2.jpg"></h4>
      </div>
      <div class="item">
       <h4><img class="image" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/CEPC/Clearance/May21/D23947948_IN_CEPC_Clearance-store_May21_rush_1500x300.jpg"></h4>
      </div>
      <div class="item">
        <h4> <h4><img class="image" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Laptops/June/VaionAvita/Avita_Refresh_1500_300.jpg"></h4></span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
