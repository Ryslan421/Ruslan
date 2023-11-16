<?php
session_start();

// Вивести значення змінних
echo "Group: {$_SESSION['group']}<br>";
echo "Year: {$_SESSION['year']}<br>";
?>
