<?php
include_once("index.html");
echo "<hr />";
echo "<h1>Задание 2</h1>";

// Создать класс «Работник фирмы» и производные классы
// «Менеджер», «Администратор», «Программист».

class employer
{
	var $name;
	var $salary;
	var $acceslevel;

	function employer($nam, $salar, $accesleve)
	{
		$this->name = $nam;
		$this->salary = $salar;
		$this->acceslevel = $accesleve;
	}

	function getName()
	{
		return $this->name;
	}

	function getSalary()
	{
		return $this->salary;
	}

	function getAcceslevel()
	{
		return $this->acceslevel;
	}

	function setName($Nname)
	{
		$this->name = $Nname;
	}

	function out()
	{
		echo "<p>";
		echo $this->name . "<br />";
		echo $this->salary . "<br />";
		echo $this->acceslevel . "<br />";
		echo "</p>";
	}

}

class manager extends employer
{
	var $people;

	function getPeople()
	{
		return $this->people;
	}
}

class admin extends employer
{
	var $experience;

	function getExperience()
	{
		return $this->experience;
	}
}

class programmer extends employer
{
	var $servers = 5;

	function getServers()
	{
		return $this->servers;
	}

	function getName()
	{
		echo "<ol><li>$this->name</li></ol>";
	}

	function setName($Nname)
	{
		$this->name = "Программист - $Nname";
	}

}

$a = [];

$a[0] = new manager('Ann', 2500, 1);
$a[1] = new admin('Rob', 3000, 5);
$a[2] = new programmer('Tom', 1700, 2);

$a[0]->setName('Anna');
$a[1]->setName('Robert');
$a[2]->setName('Tommas');

for ($i = 0; $i < 3; $i++) {
	$a[$i]->out();
}

?>