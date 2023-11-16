<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Зчитати логін і пароль з форми та записати в сесію
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="session.php">
        Login: <input type="text" name="login">
        Password: <input type="password" name="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
