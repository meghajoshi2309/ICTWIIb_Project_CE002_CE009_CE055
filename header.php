<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index10.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                         <?php
                        
                        if (isset($_SESSION['user_id'])){
                        $sql="SELECT * FROM `item` WHERE `name`='$_SESSION[username]'";
                        $result=mysqli_query($con,$sql);
                        $total=0;
                        
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                           $sql1="SELECT * FROM `producttb` WHERE `id`='$row[product_id]'";
                           $con1=mysqli_connect("localhost","root","","productdb");
                           $result1=mysqli_query($con1,$sql1);
                           while($row1=mysqli_fetch_assoc($result1)){
                           
                           $total += 1;
                           }
                        }
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$total</span>";
                           
                        
                           
                            
                        
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?> 
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>