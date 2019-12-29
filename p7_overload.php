 <?php
class fn_over
{
	function add()
	{
		$sum=0;
		foreach(func_get_args() as $a) //variadic function func_num_args() also
		{
			echo $a." ";
			$sum = $sum + $a;
		}
		echo "= ".$sum."<br>";
	}
}

$n1 = new fn_over();
$n1->add(2,3);
$n1->add(3,4,5);
$n1->add(4,5.3,6.2,7);
$n1->add(1,2,3,4,5,6,7,8,9,10);
?>