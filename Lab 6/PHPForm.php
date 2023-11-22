
<?php
$fio=$_POST['fio'];
$pass=$_POST['pass'];

$pr = array("IT-сфера","Точные науки","Медицина","Астрология");
$prof=$_POST['prof'];

$sex=$_POST['sex'];
$education=$_POST['education'];

$j=array("Все равно","Работа с клиентами","Работа с документами","Работа в одиночку");
$job=$_POST['job'];


echo "
			<meta charset='UTF-8'>
			<title>Ответ сервера</title>
			<table style='font-size: 20px;'>
				<tr><td colspan='2' align ='center' style='font-size:25px;font-weight:900;'>Ваша анкета</tr></td>
				<tr><td> ФИО:</td>				<td> $fio 	</td></tr>	
				<tr><td>Ваш род занятий:</td>	<td> $pr[$prof] </td></tr>		
				<tr><td>Пол:</td> 				<td> $sex 	</td></tr>	
				<tr><td>Сведения об образовании:</td><td> $education</td></tr>
				<tr><td>Ваши предпочтения :</td><td> ";
				foreach ($job as $name){
					echo "$j[$name], ";
				}
				
echo "			</td></tr>	
			</table>";
echo "<br><br>
		<a href='greet.php?fio=$fio' style='color:black; font-size:50px; font-weight:800;'> Сказать привет! </a>
";
?>