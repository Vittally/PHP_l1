<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$title</title>
</head>
<body>
<?php

echo "<h3>ЗАДАНИЕ 1</h3>";

$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true? - Потому что в php динамическая типизация и 05 приведена к 5
$c = $a + $b;
echo "$c";
var_dump($a === $b); // А при сравнении типов получим false - это разные типы
var_dump((int)'012345');     // Почему 12345? - Потому что int - это целое число, а целые числа не начинаются с 0, поэтому 01 == 1
var_dump((float)123.0 === (int)123.0); // Почему false? - Потомы что это азные типы переменных, а "===" - это сравнение с учетом типов
var_dump((int)0 === (int)'hello, world'); // Почему true? - Думаю потому, что 'hello, world' не является числом, поэтому мы получили false, а (int)false === 0
echo (int)'hello, world';

echo "<h3>ЗАДАНИЕ 2</h3>";

$title = "Главная";
$today = date("m.d.y");
$header = "<h1>Сегодня - $today</h1>";
echo $header;

echo "<h3>ЗАДАНИЕ 3</h3>";

$c = 5;
$d = 8;

echo "c = " . $c . "<br>";
echo "d = " . $d . "<br>";

$c += $d;
$d = $c - $d;
$c = $c - $d;

echo "c = " . $c . "<br>";
echo "d = " . $d . "<br>";

?>
</body>
</html>

/**
* Created by PhpStorm.
* User: owner
* Date: 04/03/2019
* Time: 06:33
*/
