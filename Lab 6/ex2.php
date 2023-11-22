<!DOCTYPE Html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Лабораторная 6 – Джумабаев Богдан 590-1</title>
</head>

<body style="text-align: -webkit-center; ">
	<?php include_once('head.html'); ?>
	<form style="width:max-content" action="Form.php" method="post">
		<table>
			<tr>
				<td colspan="2" align='center' style="font-size:25px;font-weight:900;">Анкета
			</tr>
			</td>
			<tr>
				<td>Введите ФИО:</td>
				<td><input type="text" name="fio" required></td>
			</tr>
			<tr>
				<td>Введите дату рождения:</td>
				<td><input type="date" name="date" required></td>
			</tr>
			<tr>
				<td>Какие языки вы знаете:</td>
				<td><input type="checkbox" value="0" name="lang[]">Русский </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" value="1" name="lang[]">Английский </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" value="2" name="lang[]">Польский </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" value="3" name="lang[]">Немецкий </td>
			</tr>
			<tr>
				<td>Посчитайте: <b>5*4</b></td>
				<td>Ваш ответ: <textarea required name="solution" rows="1" cols="10" placeholder="Ваш ответ"
						style="resize:none;"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Отправить" style="font-size:15px;font-weight:700;">
					<input type="reset" value="Очистить" style="font-size:15px;font-weight:700;">
			</tr>
			</td>
		</table>
	</form>
</body>

</html>