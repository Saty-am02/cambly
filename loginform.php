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
    <link rel="stylesheet" href="CSS/login.css">
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
            <h2>Login Form </h2>
            <form action="" method="post">
                <div class="inputBox">
                    <input type="text" name="username" placeholder="username" required="">
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="password" required="">
                </div>
                <div class="inputBox"> 
                    <input type="submit" name="submit" value="Login">
                </div>
                <p class="forget">Forgot Password ?<a href="forgetpassword.php">Click Here</a></p>
                <p class="forget">Don't have an account ?<a href="sinupform.php">Sign up</a></p>
                <p class="forget-1">Back to !<a href="index.php">Home page</a></p>
       
            </form>
            </div>
        </div>
    </section>
    <?php
        if(isset($_POST['submit'])){
            $count=0;
            $res=mysqli_query($db,"SELECT * FROM `register` WHERE username='$_POST[username]' && password='$_POST[password]' ;");

            $row=mysqli_fetch_assoc($res);

            $count=mysqli_num_rows($res);

            if($count==0){
                ?>
                
                <div class="alert alert-danger" style="width: 500px; margin-left: 450px; margin-top: -80px; text-align: center; background-color: #000; color: white;">
                    <strong> The username and password doesn't matched. </strong>
                </div>
                <?php
            }
            else{
                $_SESSION['login_user'] = $_POST['username'];
                
                ?>
                <script type="text/javascript">
                    window.location="cambly.php"
                </script>
                <?php
            }
        }
    ?>
</body>
</html>