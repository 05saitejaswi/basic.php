<?php

// Indexed array
// Associative array 
// Multidimensional array 

//Declare an array with Direct Initialization
$num1 = array(11,12,31,45,59, 66, 73);

$num2[0] = 5;   
$num2[1] = 7;	
$num2[2] = 9;

// count() will return you the number of elements in an array
for($i=0; $i<count($num1); $i++)
	echo $num1[$i]."<br>";

echo "<br><br>";

for($i=0; $i<count($num2); $i++)
	echo $num2[$i]."<br>";
?>