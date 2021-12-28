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
//        $results = mysqli_query($link, 'INSERT into users SET us_name = "' .$_POST['name'] .'", us_password = "' .$_POST['password'].'";');
//} else {
//    echo 'Access-Denied<br>1+4 не ровно '.$_POST['secure'].'!';
//}
//if ($link == false){
//    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
//}


//$registerQuery = 'INSERT INTO users SET us_name = "'.$_POST['name'].'", us_password = "'.$_POST['password'].'"';
//echo $registerQuery;



//----------   Varian 3 (whith name chek) -------
$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
$currentName = 'SELECT us_name FROM users';
$nameQuery = mysqli_query($link, $currentName);

function calc($a){
    while ($row = mysqli_fetch_array($a)) {
        if ($row['us_name'] == mb_strtolower($_POST['name'])){
            return true;
            break;
        }
    };
};

if (calc($nameQuery) == true){
    echo 'This name is alredy taken!<br>';
} else if($_POST['secure'] != 5){
    echo 'Access-Denied<br>1+4 не ровно '.$_POST['secure'].'!<br>';
} else {
    echo 'Регистрация успешно завершена.<br>user '.$_POST['name'].' was register';
    $registerQuery = 'INSERT into users SET us_name = "' .mb_strtolower($_POST['name']) .'", us_password = "' .$_POST['password'].'";';
    $results = mysqli_query($link, $registerQuery);
}

?>