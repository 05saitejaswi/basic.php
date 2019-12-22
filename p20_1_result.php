<?php

$roll = $_REQUEST["txt_roll"];
$name = $_REQUEST["txt_name"];
$tam = $_REQUEST["txt_tam"];
$eng = $_REQUEST["txt_eng"];
$mat = $_REQUEST["txt_mat"];
$sci = $_REQUEST["txt_sci"];
$ssc = $_REQUEST["txt_ssc"];

$tot = $tam + $eng + $mat + $sci + $ssc;
$avg = $tot / 5;

if ( $tam >=35 && $eng >=35 && $mat >=35 && $sci >=35 && $ssc >=35)
	$res = "Pass";
else
	$res = "Fail";

if($res=="Pass")
{
	if ($avg >= 75) $grd = "Distinction";
	elseif ($avg >= 60) $grd = "First Class";
	elseif ($avg >= 50) $grd = "Second Class";
	else $grd = "nil";
}
else
	$grd = "nil";
	
?>

<html>
<body bgcolor=cyan>
<pre>

	Roll	: <?php echo $roll; ?>

	Name	: <?php echo $name; ?>

	Tamil	: <?php echo $tam; ?> 

	English	: <?php echo $eng; ?>

	Maths	: <?php echo $mat; ?>

	Science	: <?php echo $sci; ?>

	S.Sci	: <?php echo $ssc; ?>

	
	Total	: <?php echo $tot; ?>

	Average	: <?php echo $avg; ?>

	Result	: <?php echo $res; ?>

	Grade	: <?php echo $grd; ?>

</pre>
</body>
</html>

