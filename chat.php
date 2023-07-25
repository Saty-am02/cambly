<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/chat.css">
</head>
<body>
    <div class="box">
        <div class="hair"></div>
    <div class="bottom">
         <span></span>
    </div>
    <div class="head">
        <div class="neck"></div>
        <div class="face">
            <div class="eyes">
                <span class="eye"><i></i></span>
                <span class="eye"><i></i></span>
            </div>
            <div class="mouth"></div>
        </div>
    </div>
</div>



<script>
    document.querySelector('body').addEventListener('mousemove',eyeball);
    function eyeball(){
        let eye = document.querySelectorAll('.eye i');
            eye.forEach(function(eye){
            let x = (eye.getBoundingClientRect().left) + (eye.clientWidth/2);
            let y = (eye.getBoundingClientRect().top) + (eye.clientHeight/2);
            let radian = Math.atan2(event.pageX -x,event.pageY -y);
            let rot = (radian * (180/ Math.PI)* -1 ) + 270;
            eye.style.transform = "rotate("+ rot + "deg)";
        })
    }
    var oddtrivia =[]
    oddtrivia[0] = "The journey of a thousand miles begins with one step.";
    oddtrivia[1] = "That which does not kill us makes us stronger.";
    oddtrivia[2] = "Life is what happens when you’re busy making other plans.";
    oddtrivia[3] = "When the going gets tough, the tough get going.";
    oddtrivia[4] = "You must be the change you wish to see in the world.";
    oddtrivia[5] = "You only live once, but if you do it right, once is enough."; 
    oddtrivia[6] = "Tough times never last but tough people do.";
    oddtrivia[7] = "Whether you think you can or you think you can’t, you’re right.";
    oddtrivia[8] = "Tis better to have loved and lost than to have never loved at all."; 
    oddtrivia[9] = "Strive not to be a success, but rather to be of value.";
    
    function oddTrivia() 
    {
        var randomtrivia = Math.floor(Math.random()*(oddtrivia.length));
        document.getElementById('ptrivia').innerHTML = oddtrivia[randomtrivia];
    }
    
</script>

</body>
<footer>
<div class="inputBox" id="button"> 
<button onclick="oddTrivia()" style="
    position: absolute;
    height: 100px;
    background: black;
    color: red;
    min-width: 100px;
    height: 30px;
    font-weight: 600;
    font-style: bold;
    font-size: 20px;
    border:none;
    border-radius: 50px;
    top: 670px;
    left: 46.4%;
    justify-items: end;
    align-items: center;">Quotes</button>
<P id="ptrivia" style="   
    position: absolute;
    font-weight: 600;
    font-style: bold;
    font-size: 30px;
    top: 60px;
    margin-left:-30%;
    padding-right:30%;
    text-align:center;
    "></P>
</div>
</footer>
</html>