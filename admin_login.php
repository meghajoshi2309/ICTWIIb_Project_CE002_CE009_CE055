<?php require("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <h2>ADMIN LOGIN</h2>
        <input type="text" name="AdminName" placeholder="AdminName"><br>
        <input type="password" name="AdminPass" placeholder="Password"><br>
        <button type="submit" name="Login">LOGIN</button>
    </form>
    </div>
    </div>

    <?php

    function input_filter($data)
    {
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    if(isset($_POST['Login']))
    {
       // echo "yes";
        $AdminName=input_filter($_POST['AdminName']);
        $AdminPass=input_filter($_POST['AdminPass']);

        $AdminName=mysqli_real_escape_string($con,$AdminName);
        $AdminPass=mysqli_real_escape_string($con,$AdminPass);

        $query="SELECT * FROM `admin_login` WHERE 'Admin_Name'=? AND 'Admin_Password'=?";

        if($stmt=mysqli_prepare($con,$query))
        {
            //echo "yes";
            mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if((mysqli_stmt_num_rows($stmt))==1)
            {
                session_start();
                $_SESSION['AdminLoginId']=$AdminName;
                header("location: admin_panel.php");
            }
            else
            {
                echo "<script>
                alert('Invalid Admin Name Or Password');
                </script>";
            }
            mysqli_stmt_close($stmt);
        }
       
    }

    
    ?>
</body>
</html>