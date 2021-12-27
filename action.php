Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?>.
Вам <?php echo (int)$_POST['age']; ?> лет.

<?php
    if (htmlspecialchars($_POST['name']) === "Daskar"){
        echo 'Даскар мы ждали тебя';
};
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$mysqli = new mysqli("localhost", "root", "jgQpjtVV", "datebase1");
//$mysqli->query("DROP TABLE IF EXISTS test");
//$mysqli->query("CREATE TABLE test(id INT)");
$link = mysqli_connect("localhost", "root", "jgQpjtVV", "users_base");
//$sql = 'INSERT INTO cities SET name = "Kiev"';
//$result = mysqli_query($link, $sql);
//
//if ($result == false) {
//    print("Произошла ошибка при выполнении запроса");
//}

$sql_user_name = 'SELECT '.$_POST['name'].','.$_POST['age'].' from user_info';
//
//
$result = mysqli_query($link, $sql_user_name);

//while ($row = mysqli_fetch_array($result)) {
//  print("Город: " . $row['user_name'] . "; Идентификатор: . " . $row['skills'] . "<br>");
//}
if ($row = mysqli_fetch_array($result)) {
  print("Вход разрешен " . $row[$_POST['name']] . "; Ваш пароль: . " . $row['skills'] . "<br>");
}
//
//

?>