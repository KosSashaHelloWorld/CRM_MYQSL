<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Календарь</title>
</head>
<body>
<div>
    <form action="main_menu.html">
        <input type="submit" value="В главное меню">
    </form>
    <form action="#">
        <p>Выберите дату: <input type="date" name="date">
            <input type="submit" value="Смотреть">
        </p>
    </form>
    <form>
        <table>
            <caption>
                Записи
            </caption>
            <thead>
            <tr>
                <td>Время</td>
                <td>Имя</td>
                <td>Услуга</td>
            </tr>
            </thead>
            <tbody>
            <?php
            require "Connector.php";
            $db_connection = getDBConnection();
            $date = trim($_REQUEST['date']);
            $query = "SELECT worktime_time, client_name, service_name FROM records WHERE worktime_date='$date'";
            $result = mysqli_query($db_connection, $query);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row["worktime_time"]; ?></td>
                    <td>
                        <a href="client_form.php?name=<?php echo $row["client_name"] ?>">
                            <?php echo $row["client_name"]; ?>
                        </a>
                    </td>
                    <td><?php echo $row["service_name"]; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </form>
</div>
</body>
</html>