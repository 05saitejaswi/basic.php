<?php

	$num = array (7,15,9,32,21,67,42);
	
	for($i=0; $i < count($num); $i++)
	{
			if($num[$i] == 32)
				echo ++$i."<br>";
	}
?>

