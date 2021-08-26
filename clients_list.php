<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Clients list</title>
</head>
<body>
<div>
    <form>
        <table>
            <thead>
            <tr>
                <td>ФИО</td>
                <td>Номер телефона</td>
                <td>Вконтакте</td>
                <td>Instagram</td>
                <td>Почта</td>
                <td>Описание</td>
            </tr>
            </thead>
            <?php
            require "Connector.php";
            $dbconnection = getDBConnection();
            $query = "SELECT * FROM clients;";
            $result = mysqli_query($dbconnection, $query);
            while ($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <td>
                    <a href="client_form.php?name=<?php echo $row["client_fullname"] ?>">
                        <?php echo $row['client_fullname']; ?>
                    </a>
                </td>
                <td><?php echo $row['client_phone']; ?></td>
                <td><?php echo $row['client_vk']; ?></td>
                <td><?php echo $row['client_instagram']; ?></td>
                <td><?php echo $row['client_email']; ?></td>
                <td><?php echo $row['client_desc']; ?></td>
            </tr>
            <?php }?>
        </table>
    </form>
</div>
<form action="main_menu.html">
    <input type="submit" value="В главное меню">
</form>
</body>
</html>