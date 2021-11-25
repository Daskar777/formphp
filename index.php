<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="action.php" method="post">
    <p>Ваше имя: <input type="text" name="name" value="name" class="iput_class" id="nameInput"/></p>
    <p>Ваш возраст: <input type="text" name="age" class="iput_class"/></p>
    <p><input type="submit" /></p>
</form>
<?php
    echo 'some code';
    include 'part.php';
?>
<script>
let nameInput = document.getElementById('nameInput');
nameInput.onfocus =() => {
    nameInput.value = '';
    nameInput.style.color = '#000000';
}

</script>
</body>
</html>