<?php

$stmt = "welcome to rit infotech solutions to LEARN and to get placed";

echo str_repeat(" # ",10); 

echo "<br> $stmt <br>";

echo str_repeat('*',100);

echo "<br>"; 
echo "Words : ".str_word_count($stmt);


echo "<br>"; 
echo "Letters : ".strlen($stmt);


echo "<br>"; 
echo "Upper : ". ucfirst($stmt);


echo "<br>";
echo "Capsmall : ". ucwords($stmt);


echo "<br>"; 
echo "Lower : ".strtolower($stmt);


echo "<br>"; 
echo "Upper : ".strtoupper($stmt);


echo "<br>"; 
echo "To Count : ".substr_count($stmt,"to");


echo "<br>"; 
echo "Find & Reset : ". strstr($stmt,"to");


echo "<br>"; 
echo "First Occurance : ".strpos($stmt,"to");


echo "<br>"; 
echo "Last Occurance : ".strrpos($stmt,"to");


echo "<br>";
echo "Reverse : ".strrev($stmt);

echo "<br>";echo "<br>";

$name = "rit";
if(strcmp($name,"rit")==0)
	echo "Both are same";
else
	echo "not same";





?>
