<?php
//---------------------Variant 1 ----------------
//--------------------working code--------------
//$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
//if ($_POST['secure'] == 5){
//        echo 'Регистрация успешно завершена.<br>User '.$_POST['name'].' was created';
//        $registerQuery = 'INSERT into user_info SET name = "' .$_POST['name'] .'", password = "' .$_POST['password'].'";';
//        $results = mysqli_query($link, $registerQuery);
//        echo $registerQuery;
//} else {
//    echo 'Access-Denied<br>1+4 не ровно '.$_POST['secure'].'!';
//}

//     ----------------------------   Variant 2  --------------------------------
//----------------------Без использования переменной $registerQuery----------------

//$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
//if ($_POST['secure'] == 5){
//        echo 'Регистрация успешно завершена.<br>User '.$_POST['name'].' was created';
//        $registerQuery = 'INSERT into user_info SET name = "' .$_POST['name'] .'", password = "' .$_POST['password'].'";';
//        $results = mysqli_query($link, 'INSERT into user_info SET name = "' .$_POST['name'] .'", password = "' .$_POST['password'].'";');
//        echo $registerQuery;
//} else {
//    echo 'Access-Denied<br>1+4 не ровно '.$_POST['secure'].'!';
//}








$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
$currentName = 'SELECT name FROM user_info';
$nameQuery = mysqli_query($link, $currentName);

function calc($a,$b){
    while ($row = mysqli_fetch_array($a)) {
        if ($row[$b] == $_POST[$b]){
            return true;
            break;
        }
    };
};

if (calc($nameQuery,'name') == true){
    echo 'This name is alredy taken!<br>';
} else if($_POST['secure'] != 5){
    echo 'Access-Denied<br>1+4 не ровно '.$_POST['secure'].'!<br>';
} else {
    echo 'Регистрация успешно завершена.<br>user '.$_POST['name'].' was register';
    $registerQuery = 'INSERT into user_info SET name = "' .$_POST['name'] .'", password = "' .$_POST['password'].'";';
    $results = mysqli_query($link, $registerQuery);
}


?>