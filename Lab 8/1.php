<?php
include_once("index.html");
echo "<hr />";
echo "<h1>Задание 1</h1>";


// Book:  Автор,  Название,  Издательство,  Год,  Количество  страниц.  Создать  массив 
// объектов. Вывести: 
// а) список книг заданного автора; 
// б) список книг, выпущенных заданным издательством; 
// в) список книг, выпущенных после заданного года.

$fill = array(
    array('Автор 1', 'Название книги 1', 'Издательство 1', 2000, 1),
    array('Автор 2', 'Название книги 2', 'Издательство 2', 2005, 2),
    array('Автор 3', 'Название книги 3', 'Издательство 3', 2010, 3),
    array('Автор 4', 'Название книги 4', 'Издательство 4', 2015, 4),
    array('Автор 5', 'Название книги 5', 'Издательство 5', 2020, 5),
    array('Автор 6', 'Название книги 6', 'Издательство 6', 1995, 6),
    array('Автор 7', 'Название книги 7', 'Издательство 7', 2002, 7),
    array('Автор 8', 'Название книги 8', 'Издательство 8', 2012, 8),
    array('Автор 9', 'Название книги 9', 'Издательство 9', 2008, 9),
    array('Автор 10', 'Название книги 10', 'Издательство 10', 1998, 10),
    array('Автор 11', 'Название книги 11', 'Издательство 11', 2004, 11),
    array('Автор 12', 'Название книги 12', 'Издательство 12', 2019, 12),
    array('Автор 13', 'Название книги 13', 'Издательство 13', 1997, 13),
    array('Автор 14', 'Название книги 14', 'Издательство 14', 2007, 14),
    array('Автор 15', 'Название книги 15', 'Издательство 15', 2017, 15),
    array('Автор 16', 'Название книги 16', 'Издательство 16', 1993, 16),
    array('Автор 17', 'Название книги 17', 'Издательство 17', 2003, 17),
    array('Автор 18', 'Название книги 18', 'Издательство 18', 2009, 18),
    array('Автор 19', 'Название книги 19', 'Издательство 19', 1999, 19),
    array('Автор 20', 'Название книги 20', 'Издательство 20', 2014, 20)
);


class book
{
	var $author;
	var $name;
	var $publisher;
	var $year;
	var $pages;

	function getAuthor()
	{
		return $this->author;
	}

	function getPublisher()
	{
		return $this->publisher;
	}

	function getYear()
	{
		return $this->year;
	}

	function out($cond)
	{
		echo "<ul><li>$cond: $this->author , $this->name , $this->publisher , $this->year , $this->pages</li></ul>";
	}
}
$r = 3;
$d = 5;

$a;
for ($i = 0; $i < $r; $i++) {
	$a[$i] = new book;
	$a[$i]->author = $fill[$i][0];
	$a[$i]->name = $fill[$i][1];
	$a[$i]->publisher = $fill[$i][2];
	$a[$i]->year = $fill[$i][3];
	$a[$i]->pages = $fill[$i][4];
}

echo "
		<br>
		<form action='1.php' method='' align='center'>
			<input type='text' name='author' placeholder='Автор'>
			<input type='text' name='publisher' placeholder='Издательство'>
			<input type='number' name='year' placeholder='Год'>
			<br>
			<br>
			<input type='submit'>
		</form>
		<br>
	";
if (isset($_GET['author']) or isset($_GET['publisher']) or isset($_GET['year'])) {
	$author = $_GET['author'];
	$publisher = $_GET['publisher'];
	$year = $_GET['year'];

	for ($i = 0; $i < $r; $i++) {
		if ($a[$i]->author == $author) {
			echo $a[$i]->out("Author: ");
			continue;
		}
		if ($a[$i]->publisher == $publisher) {
			echo $a[$i]->out("Publisher: ");
			continue;
		}
		if ($a[$i]->year > $year) {
			echo $a[$i]->out("Year: ");
			continue;
		}
	}
}

?>