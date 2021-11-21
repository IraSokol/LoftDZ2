<?php

include "src/functions.php";

echo task1([1,2,3], false);

echo task2('+' ,  2, 5);

echo task3(8, 5);

date_default_timezone_set('Europe/Amsterdam');
echo date('d.m.Y H:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00');
echo '<br>';
echo date('Y-m-d H:i:s', 1456268400);
echo '<br>';

$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string);
echo '<br>';
$string = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string);
echo '<br>';

file_put_contents('test.txt', 'Hello again!');
my_file_get_contents('test.txt');
