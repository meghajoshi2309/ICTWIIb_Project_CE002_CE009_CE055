<?php
    $con=mysqli_connect("localhost","root","","contact");
    if(mysqli_connect_error())
    {
        echo "cannot connect to database";
        exit();
    }
?>