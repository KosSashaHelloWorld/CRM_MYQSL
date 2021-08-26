<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sign Up</title>
</head>
<body>
<div>
    <?php
    if(array_key_exists('submit_button', $_POST)){
        require "checkuser.php";
    }
    ?>
    <form method="post">
        <label>
            <input type="text" name="login" placeholder="Логин">
        </label>
        <br>

        <label>
            <input type="password" name="password" placeholder="Пароль">
        </label>
        <br>

        <input type="submit" name="submit_button" value="Войти" class="button">

        <input type="button" value="Забыли пароль?" title="coming soon...">
    </form>
</div>
</body>
</html>