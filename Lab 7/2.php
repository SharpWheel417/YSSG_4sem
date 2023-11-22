<?php
include_once("index.html");
echo "<hr />";
echo "<h1>Задание 2</h1>";

$A[] = array("name" => "Иван", "age" => "25", "email" => "ivanov@mail.ru", "lastname" => "Петров");
$A[] = array("name" => "Петр", "age" => "34", "email" => "petrov@mail.ru", "lastname" => "Иванов");
$A[] = array("name" => "Дмитрий", "age" => "47", "email" => "sidorov@mail.ru", "lastname" => "Титов");
$A[] = array("name" => "Анна", "age" => "13", "email" => "anna@mail.ru", "lastname" => "Анисенко");
$A[] = array("name" => "Александр", "age" => "25", "email" => "petrovv@mail.ru", "lastname" => "Иванов");

// Получение списка столбцов
foreach ($A as $key => $row) {
	$lastname[$key] = $row['lastname'];
	$age[$key] = $row['age'];
}

// Сортируем lastname по возр
// Добавляем $A для сортировки
array_multisort($lastname, SORT_ASC, $A);


echo "<table border='4' align='center' style='font-size:25px;'>";
echo "<tr> 
		<td>lastname</td>
		<td>name</td>
		<td>age</td>
		<td>email</td>
	   </tr>";
for ($i = 0; $i < 4; $i++) {
	echo "<tr>";
	echo "<td>", $A[$i]['lastname'], "</td>";
	echo "<td>", $A[$i]['name'], "</td>";
	echo "<td>", $A[$i]['age'], "</td>";
	echo "<td>", $A[$i]['email'], "</td>";
	echo "</tr>";
}
echo "</table>";
?>