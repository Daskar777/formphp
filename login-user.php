<?php
//$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
//$currentName = 'SELECT name FROM user_info';
//$nameQuery = mysqli_query($link, $currentName);
//function calc($a,$b){
//    while ($row = mysqli_fetch_array($a)) {
//        if ($row[$b] == $_POST[$b]){
//            return true;
//            break;
//        }
//    };
//};
//if (calc($nameQuery,'name') == true){
//        echo 'HELLO ' .$_POST['name'] .'!<br>';
//} else if($_POST['secure'] != 5){
//    echo 'Access-Denied<br>1+4 не ровно '.$_POST['secure'].'!<br>';
//} else {
//    echo 'Access-Denied.<br>user '.$_POST['name'].' do not axist';
//}

$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users");
$currentName = "SELECT id FROM user_info WHERE name = 'Daskar' and password = '4742407'";
$nameQuery = mysqli_query($link, $currentName);
print $nameQuery;
function calc($conect,$column){
    while ($row = mysqli_fetch_array($conect)) {
        if ($row[$column] == $_POST[$column]){
            return true;
            break;
        }
    };


?>