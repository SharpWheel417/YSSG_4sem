<?php
include_once("index.html");
echo "<hr />";
echo "<h1>Задание 1</h1>";

// Создать  пользовательскую  функцию,  которая  принимает  два  аргумента  и  возвращает  их 
// произведение. Вызвать функцию, передав ей в качестве аргументов два числа и результат 
// вывести на экран 

$a=3;
$b=7;

function mult($a = 5, $b = 10){
	$result=$a*$b;
	echo "$a*$b=$result";
	return;
}
echo "<p align='center' style='font-size:25px;' >По умолчанию: ", mult(), "</p>";
echo "<p align='center' style='font-size:25px;'>$a и по умолчанию: ",mult($a), "</p>";
echo "<p align='center' style='font-size:25px;'>Обе переменные определены: ",mult($a,$b), "</p>";

?>