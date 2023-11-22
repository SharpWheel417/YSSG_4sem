<?php
include_once("index.html");
echo "<hr />";
echo "<h1>Задание 3</h1>";

// Разработать  программу  с  использованием  наследования  классов,  реализующую 
// классы: 
//  графический объект; 
//  круг; 
//  квадрат. 
// Используя  виртуальные  функции,  выведите  на  экран  размер  и  координаты 
// графического объекта.

class grObj{
	var $x=-1;
	var $y=-1;
	var $size;
	
	function out(){
		echo "<p>Графический объект</p>";
	}
}

class square extends grObj{
	var $coordx;
	var $coordy;
	//var $size;
	
	function square(){
		$this->x=[0,1,2,3];
		$this->y=[0,1,2,3];
		$this->coordx = ($this->x[0] + ($this->x[1] - $this->x[0]) / 2.0);
		$this->coordy = ($this->y[0] + ($this->y[1] - $this->y[0]) / 2.0);
		$this->size = sqrt(pow($this->x[1] - $this->x[0], 2) + pow($this->y[1] - $this->y[0], 2));
	}
	
	function out(){
		echo "<p>square | cordX = $this->coordx | cordY = $this->coordy | size = $this->size</p>";
	}
}

class circle extends grObj{
	var $x;
	var $y;
	var $radius;
	//var $size;
	
	function circle(){
		$this->x=1;
		$this->y=2;
		$this->radius=5;
		$this->size = 3.14 * pow($this->radius, 2);	
	}
	
	function out(){
		echo "<p>circle |x=$this->x |y=$this->y | size=$this->size</p>";
	}
}

	$gr=new grObj;
	$s = new square;
	$c = new circle;
	
	$gr->out();
	$s->out();
	$c->out();

?>