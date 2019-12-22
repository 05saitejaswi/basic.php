<?php

$num = array("ravi","mani","vijay","jai");
print_r($num);
echo"<br><br>";

array_pop($num);
print_r($num);
echo"<br><br>";

array_push($num, "kavi","puvi");
print_r($num);
echo"<br><br>";

sort($num);
print_r($num);
echo"<br><br>";

echo count($num);
echo"<br><br>";

print_r(array_slice($num,2,3));
echo"<br><br>";

$num1 = array("sathish", "manoj", "siva");
$num2 = array_merge($num, $num1);
print_r($num2);
echo"<br><br>";


if(in_array("puvi",$num))
	echo "Match Found <br><br>";
else
	echo "Match Not Found <br><br>";

?>

