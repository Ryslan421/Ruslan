<?php
session_start();

// Завдання 18: Очистити значення змінних сесії
session_unset();

// Вивести значення змінних
echo "Group: {$_SESSION['group']}<br>";
echo "Year: {$_SESSION['year']}<br>";
?>
