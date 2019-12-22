
<?php

$n1 = 15;
$n2 = 21;
$n3 = 18;

//AND = both condition is true 
//OR = || If any one condition is true
// NOT = ! opposite for the function.
if (($n1 >= $n2) && ($n1 >= $n3))
	echo "$n1 is biggest";

else if (!($n2 >= $n3))
	echo "$n2 is biggest";

else 
	echo "$n3 is biggest";
	

?>

