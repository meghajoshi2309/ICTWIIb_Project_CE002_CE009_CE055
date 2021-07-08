<?php
    $con=mysqli_connect("localhost","root","","fg_pass");
    if(mysqli_connect_error())
    {
        echo "cannot connect to database";
        exit();
    }

?>