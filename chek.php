<?php
 if(isset($_POST['cod'])){
    header("location:cod.php");
 }
 else{
    header("location:paymentgetway.php");
 }