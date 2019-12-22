 <?php

	$num = array (13, 6, 21, 33, 42, 70, 99);
	
	for($i=0; $i < count($num); $i++)
	{
			if($num[$i] % 7 == 0)
				echo $num[$i]."<br>";
	}
?>