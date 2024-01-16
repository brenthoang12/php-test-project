<?php

@include "config.php";

session_start();

if(!isset($_SESSION["admin_name"])){
    header("location:login_form.php");

}

?>

<!DOCTYPE html>
<html lang = "en-US">

    <!--header-->
    <head>
        <title>admin page</title>
        <meta charset="UTF-8"> <!--define charater set-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--define viewport-->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <!--body-->
    <body>
       <div class="container">

            <div class="content">
                <h3>hi, <span>admin</span></h3>
                <h1>welcome <span><?php echo $_SESSION["admin_name"] ?></span></h1>
                <p>this is an admin page</p>
                <a href="login_form.php" class="btn">login</a>
                <a href="register_form.php" class="btn">register</a>
                <a href="logout.php" class="btn">logout</a>
            </div>
            
       </div>
    </body>

</html>