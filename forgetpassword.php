<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="CSS/forget.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="container">
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
        </div>
            <div class="form">
            <h2>Forget password</h2>
            <form action="forget-email.php">
                <div class="inputBox">
                    <input type="text" placeholder="enter your email" required>
                </div>
                
                <div class="inputBox"> 
                    <input type="Submit" value="send recovry mail">
                </div>
                <p class="forget-1">Back to !<a href="index.php">Home page</a></p>
       
            </form>
            </div>
        </div>
    </section>
</body>
</html>