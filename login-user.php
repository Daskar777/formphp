<?php
$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
$currentName = 'SELECT id , us_name , us_password FROM users';
$nameQuery = mysqli_query($link, $currentName);
function calc($a){
    while ($row = mysqli_fetch_array($a)) {
        if ($row['us_name'] == mb_strtolower($_POST['name']) and $row['us_password'] == $_POST['password']){
            echo 'Your ID is '.$row['id'].'<br>';
            echo mb_strtoupper($row['us_name']);
            echo '<br>';
            return true;
            break;
        }
    };
};
if($_POST['secure'] != 5) {
    echo 'Access-Denied<br>1+4 не ровно ' . $_POST['secure'] . '!<br>';
} else if (calc($nameQuery) == true){
    echo 'Hello '.$_POST['name'].'!<br>';
} else {
    echo 'Login or password is wrong!';
}

//$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
//$currentName = "SELECT id FROM users WHERE us_name = 'Daskar' and us_password = '4742407'";
//$nameQuery = mysqli_query($link, $currentName);
//
//print mysqli_insert_id($link);
//
//
//function calc($conect,$column){
//    while ($row = mysqli_fetch_array($conect)) {
//        if ($row[$column] == $_POST[$column]){
//            return true;
//            break;
//        }
//    };};
?>