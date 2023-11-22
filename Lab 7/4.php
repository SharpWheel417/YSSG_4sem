<?php
include_once("index.html");
echo "<hr />";
echo "<h1>Задание 4</h1>";

echo "<p align='center'>символ 'r', замена 'old', разбиение по '!'</p> <p align='right'> older! ring! bracer!</p>";

echo "
	<form action='4.php' method='POST'>
		<textarea placeholder='Вводи что угодно' name='text'></textarea>
		<input type='submit'>
	</form>
";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['text']) {
	$text = $_POST['text'];
	$count = 0;

	if (isset($_POST['text'])) {
		$letter = 'r';
		$pos = false;
		$count = substr_count($text, $letter);
		echo "<p>Количество букв '$letter' в этой строке = $count</p>";
		if ($count > 0)
			echo "<p> Позиции букв = ";
		for ($i = 0; $i < $count; $i++) {
			$pos = strpos($text, $letter, $pos);
			if ($pos !== false) {
				echo "", ++$pos, " | ";
			}
		}
		echo "</p>";
		echo "<p>Введенная строка: $text</p>";
		echo "<p>Длина строки: ", strlen($text), "</p>";
		$old = "old";
		$new = "NEW";
		$new_text = str_replace($old, $new, $text);
		echo "<p>Замены : $new_text</p>";
		$invert = strrev($text);
		echo "<p>Инвертированная: $invert</p>";

		$arr = explode("!", $text);
		echo "<p>Разбито на: ", count($arr), " части(-ей)</p>";

		for ($i = 0; $i < count($arr); $i++) {
			echo "<p>$arr[$i]</p>";
		}
	}
}

?>