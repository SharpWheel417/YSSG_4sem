<!DOCTYPE Html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Джумабаев Богдан – Лаба 6</title>
</head>

<body style="text-align: -webkit-center;">
	<?php include_once('head.html'); ?>
	<form style="width:max-content" action="PHPForm.php" method="post">
		<table>
			<tr>
				<td colspan="2" align='center' style="font-size:25px;font-weight:900;">Заполните анкету
			</tr>
			</td>
			<tr>
				<td>Введите ФИО:</td>
				<td><input type="text" name="fio"></td>
			</tr>
			<tr>
				<td>Введите пароль:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>Ваш род занятий:</td>
				<td><select name="prof">
						<option value="0">IT-сфера</option>
						<option value="1">Точные науки</option>
						<option value="2">Медицина</option>
						<option value="3">Астрология</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Пол:</td>
				<td><input type="radio" name="sex" value="M"> <span>М</span> <input type="radio" name="sex"
						value="F"><span>Ж</span></td>
			</tr>
			<tr>
				<td>Сведения об образовании:</td>
				<td> <textarea name="education"></textarea></td>
			</tr>
			<tr>
				<td>Ваши предпочтения (один или несколько вариантов):</td>
				<td><input type="checkbox" value="0" name="job[]">Все равно</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" value="1" name="job[]">Работа с клиентами</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" value="2" name="job[]">Работа с документами</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" value="3" name="job[]">Работа в одиночку</td>
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