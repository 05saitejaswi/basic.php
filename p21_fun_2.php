<?php

function tbl($a, $b)
{
	echo "<br><table border=1 bgcolor=cyan>";
	for($i=0; $i<$a; $i++)
	{
		echo "<tr>";
		for ($j=0; $j<$b; $j++)
			echo "<td> 0 </td>";
			
		echo "</tr>";
	}
	echo "</table>";
}

echo "Welcome to function program";
tbl(2,3);
tbl(4,4);
tbl(5,2);
tbl(10,4);

?>