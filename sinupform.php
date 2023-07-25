<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup form</title>
    <link rel="stylesheet" href="CSS/signup.css">
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
            <h2>signup Form</h2>
            <form action="" method="post">
                <div class="inputBox">
                    <input type="text" name="fname" placeholder="First Name" required="">
                </div>
                <div class="inputBox">
                        <input type="text" name="lname" placeholder="Last Name" required="">
                </div>
                <div class="inputBox">
                    <input type="text" name="username" placeholder="username" required="">
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="password" required="">
                </div>
                <div class="inputBox">
                 <div class="gender" >
                            <label>
                            <input type="radio" id="MALE" name="gender"/>
                            <span>MALE</span>
                        </label>
                            <label>
                            <input type="radio" id="FEMALE" name="gender" checked=""/>
                            <span>FEMALE</span>
                        </label>
                </div>
            </div>  
                <div class="inputBox"> 
                    <input type="submit" name="submit" value="signup">

                </div>
                
                <p class="forget">Already have an account ?<a href="loginform.php">Login</a></p>
                <p class="forget-1">Back to !<a href="index.php">Home page</a></p>
         
            </form>
            </div>
        </div>
    </section>
    <?php
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];

        $count=0;
        $sql='SELECT username from register';
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res)){
            if($row['username']==$_POST['username']){
                $count=$count+1;
            }
        }

        if($count==0){
            // mysqli_query($db,"INSERT INTO `register` VALUES('','$_POST[fname]', '$_POST[lname]', '$_POST[username]', 
            // '$_POST[password]', '$_POST[gender]');");
            mysqli_query($db,"INSERT INTO `register` VALUES('$fname', '$lname', '$username', 
            '$password', '$gender');");
            ?>
                <script type="text/javascript">
                    alert("Registration Successful");
                    window.location="loginform.php"
                </script>
            <?php
            
        }
        else{
    ?>
        <script type="text/javascript">
            alert("This username already exists.");
        </script>
    <?php
        }
    }
    ?>
</body>
</html>