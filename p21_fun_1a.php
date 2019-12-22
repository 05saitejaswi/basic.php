<?php
function dline($ch, $x)
{
	for ($i=0; $i<$x; $i++)
		echo $ch;
	echo "<br>";
}

dline('#', 50);
echo "Welcome to RIT <br>";
dline('$', 30);
dline('RIT ',5);
?>
