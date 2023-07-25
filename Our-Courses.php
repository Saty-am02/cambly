<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="CSS/our-course.css">
    <title>study mode</title>
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
            <h2>choose the language you wanna learn !</h2>
            <form action="IELTS.php">
                <div class="inputBox"> 
                    <input type="Submit" value="IELTS English">
                </div>
            </form>
            <form action="English.php">
                <div class="inputBox"> 
                    <input type="Submit" value="English"> 
                </div>
                 </form>
            <form action="hindi.php">
                <div class="inputBox"> 
                    <input type="Submit" value="Hindi">
                </div>
            </form>
            <form action="german.php">
                <div class="inputBox"> 
                    <input type="Submit" value="German"> 
                </div>
            </form>
            <form action="espanol.php">
                <div class="inputBox"> 
                    <input type="Submit" value="Español">
                </div>
            </form>
            <form action="russian.php">
                <div class="inputBox"> 
                    <input type="Submit" value="Russian"> 
                </div>
                <p class="forget">Back to ?<a href="cambly.php">Home page</a></p>              
            </form>
            </div>
        </div>
    </section>
</body>
</html>