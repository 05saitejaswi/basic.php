<?php
abstract class abs1
{
	public $len;
	public $bth;
	public $area;
	
	public function disp()
	{
		echo "<br> Length: $this->len <br> Breadth : $this->bth <br> Area : $this->area <br>";
	}
	abstract public function calc_area();
}

class square extends abs1
{
	function get($a)
	{
		$this->len = $a;
		$this->bth = $a;
	}
	
	function calc_area()
	{
		$this->area = $this->len * $this->bth;
	}
}

class rect extends abs1
{
	function get($a, $b)
	{
		$this->len = $a;
		$this->bth = $b;
	}
	
	function calc_area()
	{
		$this->area = 0.5 * $this->len * $this->bth;
	}
}

$s1 = new square();
$s1->get(5);
$s1->calc_area();
$s1->disp();

$r1 = new rect();
$r1->get(5,3);
$r1->calc_area();
$r1->disp();


?>