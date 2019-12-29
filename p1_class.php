<?php

class num
{
	var $a;
	var $b;

	function get($x, $y)
	{  
		$this->a = $x;
		$this->b = $y;
	}

	function put()
	{   print_r($this);
		echo $this->a."  -  ".$this->b;
		echo "<br>";
	}
}

$n1 = new num();
$n1->get(3,4);

$n1->put();
print_r($n1);

?>



