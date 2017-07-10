<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №1</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid grey;
            padding: 4px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Домашнее задание №1. Адиль Габдуллин.</h1>
<?php
for ($i = 1; $i <= 8; $i++) {
    echo "\n<h2>Задание #$i</h2>\n";
    include "$i.php";
    echo "\n";
}
?>
</body>
</html>