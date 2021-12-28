<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container_wrap">
    <div class="container" id="reg_form">
        <form action="reg-user.php" method="post">
            <p><span>Ваше имя:</span> <input type="text" name="name" value="" class="" id="nameInput"/></p>
            <p><span>Ваш пароль:</span> <input type="password" name="password" class="iput_class"/></p>
            <p><span>Сколько будет 1+4?</span> <input type="text" name="secure" class="iput_class secure_q"/></p>
            <p><input type="submit" value="Зарегистрировать" id="registerButton" class="green_but" /><input type="button" value="Войти" id="cancelBut"></p>
        </form>
    </div>
    <div class="container" id="container2">
        <form action="login-user.php" method="post">
            <p><span>login:</span> <input type="text" name="name" value="" class="iput_class" id="nameLogin"/></p>
            <p><span>password:</span> <input type="password" name="password" class="iput_class"/></p>
            <p><span>Calc please 1+4?</span> <input type="text" name="secure" class="iput_class secure_q"/></p>
            <p class="buttons_class"><input type="submit" value="Login" id="loginButton" class="green_but" /><input type="button" value="New user" id="newUserBut" class="green_but"></p>
        </form>
    </div>
</div>


<?php
    echo '';
    include 'part.php';
?>
<script>
const nameInput = document.getElementById('nameInput'),
    cancelBut = document.getElementById('cancelBut'),
    container1 = document.getElementById('reg_form'),
    newUserBut = document.getElementById('newUserBut'),
    container2 = document.getElementById('container2');
nameInput.onfocus =() => {
    nameInput.value = '';
    nameInput.style.color = '#000000';
}
cancelBut.onclick = function (){
    container1.style.display = 'none';
    container2.style.display = 'block';
}
newUserBut.onclick = function (){
    container2.style.display = 'none';
    container1.style.display = 'block';
}
</script>
</body>
</html>