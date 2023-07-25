<?php
 include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
 <head >   
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="title">cambly</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    
 </head>
<body>
    <header id="header">

<div class="image">

       <input type="image" name="image" src="images/camblee.png">
</div>
    <div class="toggle"></div>
        <ul class="navigation">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="loginform.php">Login</a></li>
            <li><a href="sinupform.php">Sign up</a></li>
            <li><a href="chat.php">Game</a></li>      
        </ul>

</header>
    <section>
        <h1 id="text" >Cambly</h1>
        <img src="images/bird1.png" id="bird1" >
        <img src="images/bird2.png" id="bird2" >
        <img src="images/forest.png" id="forest">
        <a href="#sec" id="btn">Explore</a>
        <img src="images/rocks.png" id="rocks">
        <img src="images/water.png" id="water" class="water">
    </section>    
    
    <div class="sec" id="sec">
        <img class="cambly" src="images/1635776550618.png" id="cambly">
        <p> Cambly is a language pedagogy . Cambly is an online platform founded in 2012.This is the newest version of cambly which is discoverd in 2021 by Jr. Devloper Satyam Tiwari,cambly provides on-demand access to tutors via video and online ebooks . <br> Cambly tutors are native speakers from the United States, Canada, UK, Australia,  and etc. <br> The platform allows users to connect with the suitable tutor in under 5 seconds.<br>  Users can practise in any of the languages presented in cambly like English conversation, russian gossips,spanish chitchat and manyothers take an any course, or prepare for the IELTS or TOEFL exams.
            Every class on Cambly is recorded, and video recordings are available on-demand for the respective users.<br>  Cambly provides in-chat translations that allow users to type in their native language in case they get stuck in conversation. <br> Users can book classes according to their schedule with the specific tutors as well.<br>  After 10 hours of private English classes on Cambly, every student also gets their own certificate.<br>  Cambly provides plans depending on the user's weekly agenda.
            Cambly participated in the YC W14 cohort of Y Combinator and raised an estimated $2,204,365.
        </p>
    </div>
    <script type="text/javascript">
    let text = document.getElementById('text');
    let bird1 = document.getElementById('bird1');
    let bird2 = document.getElementById('bird2');
    let forest = document.getElementById('forest');
    let btn = document.getElementById('btn');
    let rocks = document.getElementById('rocks');
    let water = document.getElementById('water');
    let header = document.getElementById('header');
    let camblee = document.getElementById('camblee');

    window.addEventListener('scroll',function(){
        let value = window.scrollY;

        text.style.top = 50 + value * -0.07 + '%';
        bird1.style.top =  value * -0.5 + 'px';
        bird1.style.left =  value * 1.5 + 'px';
        bird2.style.top =  value * -0.5 + 'px';
        bird2.style.left =  value * -1.5 + 'px';
        btn.style.marginTop =  value * 1.5 + 'px';
        rocks.style.top =  value * -0.09 + 'px';
        forest.style.top =  value * 0.25 + 'px';
        header.style.top =  value * 0.5 + 'px';

        
         
    })
    const toggleMenu = document.querySelector('.toggle');
    const navigation = document.querySelector('.navigation');
       
        toggleMenu.onclick = function(){
        toggleMenu.classList.toggle('active');
        navigation.classList.toggle('active');
    }
    
    </script>

    <div class="icon">
<footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
    <ul class="social_icon">
        <li><a href="https://github.com/Saty-am02"><ion-icon name="logo-github"></a></ion-icon></li>
        <li><a href="https://wa.me/916265988713"><ion-icon  name="logo-whatsapp"></a></ion-icon></li>
        <li><a href="#"><ion-icon name="logo-youtube"></a></ion-icon></li>
        <li><a href="https://www.linkedin.com/in/satyam-tiwari-758290220"><ion-icon name="logo-linkedin"></a></ion-icon></a></li>
        
    </ul>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="mailto:satyamxz03@gmail.com">Contact</a></li>
        <li><a href="#sec">About</a></li>
    </ul>
    <p>©️2022 cambly | All Rights Reserved</p>
</footer>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
