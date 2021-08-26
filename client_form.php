<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Форма клиента</title>
</head>
<body>
<div>
<?php
require "Connector.php";
$dbconnection = getDBConnection();
$client_name = $_REQUEST['name'];
$query = "SELECT * FROM clients WHERE client_fullname='$client_name';";
$result = mysqli_query($dbconnection, $query);
$row = mysqli_fetch_assoc($result);
?>
    <form>
        <table>
            <tr>
                <td>ФИО: </td>
                <td><?php echo $row['client_fullname']; ?></td>
            </tr>
            <tr>
                <td>Номер телефона: </td>
                <td><?php echo $row['client_phone']; ?></td>
            </tr>
            <tr>
                <td>Вконтакте: </td>
                <td><?php echo $row['client_vk']; ?></td>
            </tr>
            <tr>
                <td>Instagram:  </td>
                <td><?php echo $row['client_instagram']; ?></td>
            </tr>
            <tr>
                <td>Почта: </td>
                <td><?php echo $row['client_email']; ?></td>
            </tr>
            <tr>
                <td>Описание: </td>
                <td><?php echo $row['client_desc']; ?></td>
            </tr>
        </table>
    </form>
    <form action="main_menu.html">
        <input type="submit" value="В главное меню">
    </form>
</div>
</body>
</html>