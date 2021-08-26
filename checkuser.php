<?php
require "Connector.php";
$db_connection = getDBConnection();
$html_login = trim($_REQUEST['login']);
$html_password = trim($_REQUEST['password']);

$query = "SELECT password FROM users WHERE login = '$html_login';";
$result = mysqli_query($db_connection, $query);
$saved_password = mysqli_fetch_assoc($result)["password"];

if ($html_password == $saved_password && $html_password != NULL) {
    header("Location: main_menu.html");
} else {
    echo "Неверный логин или пароль!";
}

