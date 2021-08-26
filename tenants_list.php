<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tenants list</title>
</head>
<body>
<div>
    <form>
    <table>
        <thead>
        <tr>
            <td>ФИО</td>
            <td>Стоимсоть аренды</td>
            <td>Дата оплаты</td>
            <td>Статус</td>
        </tr>
        </thead>
        <tbody>
        <?php
        require "Connector.php";
        $dbconnection = getDBConnection();
        $query = "SELECT * FROM tenants;";
        $result = mysqli_query($dbconnection, $query);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['tenant_name'] ?></td>
                <td><?php echo $row['tenant_price'] ?></td>
                <td><?php echo $row['tenant_payday'] ?></td>
                <td><?php
                    if ($row['tenant_payed'] == 1) {
                        echo "Оплачено";
                    } else if ($row['tenant_payed'] == 0) {
                        echo "Не оплачено";
                    } else {
                        echo "Неизвестно";
                    }?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </form>
    <form action="main_menu.html">
        <input type="submit" value="В главное меню">
    </form>
</div>
</body>
</html>