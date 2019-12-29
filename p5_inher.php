<?php

class personal
{
	var $name;
	var $gender;
	var $city;
	
	function getpers($a, $b, $c)
	{
		$this->name = $a;
		$this->gender = $b;
		$this->city = $c;
	}
	
	function putpers()
	{
		echo "<br>$this->name<br>$this->gender<br>$this->city";
	}
}

class stud extends personal
{
	var $roll;
	var $mark;
	
	function getstud($x, $y)
	{
		$this->roll = $x;
		$this->mark = $y;
	}
	
	function putstud()
	{
		$this->putpers();
		echo "<br>$this->roll<br>$this->mark";
	}
}

$s1 = new stud();
$s1->getpers("Pradeep","Male","Chennai");
$s1->getstud(101,85.4);

$s2 = new stud();
$s2->getpers("Manoj","Male","Madurai");
$s2->getstud(102,73.4);

$s2->putstud();
$s1->putstud();


?>