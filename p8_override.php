<?php
class fn_oride
{
	function disp() { echo "<br> I am from Base Class <br>"; }
}

class fn_oride_1 extends fn_oride
{
	function disp() { echo "<br> I am from Derived Class <br>"; }
}

class fn_oride_2 extends fn_oride_1
{
	function disp() 
	{ 

		echo "<br> I am from Last Class <br>"; 
		fn_oride::disp();
		parent::disp();
	}
}

$a1 = new fn_oride();
$a1->disp();

$b1 = new fn_oride_1();
$b1->disp();

$c1 = new fn_oride_2();
$c1->disp();
?>