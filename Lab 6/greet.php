<?php
$fio = $_GET['fio'];
if ($fio == "")
	$fio = "Незнакомец";

echo "
<meta charset='UTF-8'>
<title>Привет $fio!</title>
<body class='greet'>
    <p class='text'>Добро пожаловать, $fio!</p>
</body>";
?>