<?php

$prod = array ("Idly"=>5.55, "Dosai"=>10.75, "Poori"=>12.55, "chappathi"=>7.35);

echo $prod['Poori']."<br>";

foreach ($prod as $key => $value) {
print $key.'<br>';
print $value.'<br>';

}

$num3 = array(5=>302, 6=>444, 7=>55);

// echo $num3[5]."<br>";
//  $num3[8]."<br>";
// echo $num3[7]."<br>";

for($i=5; $i<=7; $i++)
	echo $num3[$i]."<br>";
	
?>