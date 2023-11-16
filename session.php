<?php
session_start();

// Завдання 7: Записати номер групи в сесію
$_SESSION['group'] = 'YourGroupNumber';

// Завдання 10: Додати змінну year в сесію
$_SESSION['year'] = 'YourStartYear';

// Завдання 15: Рахунок кількості відвідувань
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] + 1 : 1;
setcookie('counter', $counter, time() + 3600); // Куки на годину

// Вивести значення змінних
echo "Group: {$_SESSION['group']}<br>";
echo "Year: {$_SESSION['year']}<br>";
echo "Visit Count: $counter";
?>
