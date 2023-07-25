<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="CSS/study.css">
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
            <h2>choose the way you wanna learn !</h2>
            <form action="videos.php#six">
                <div class="inputBox"> 
                    <input type="Submit" value="Videos">
                </div>
            </form>
            <form action="e-books.php#six">
                <div class="inputBox"> 
                    <input type="Submit" value="Ebooks" src="outline_close_black_24dp.png"> 
                </div>
                <p class="forget">Back to ?<a href="cambly.php">Home page</a></p>              
                <p class="forget">Back to ?<a href="Our-Courses.php">Our Courses</a></p>              
        
            </form>
            </div>
        </div>
    </section>
</body>
</html>