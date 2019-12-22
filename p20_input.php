<?php

$name = $_REQUEST["txt_name"];
$pass = $_REQUEST["pwd_pass"];
$gender = $_REQUEST["rdo_gen"];
$place = $_REQUEST["chk_city"];
$degree = $_REQUEST["dwn_grad"];
$job = $_REQUEST["mdn_prefjob"];
$comment = $_REQUEST["txa_comment"];

if ($gender == "male")
	$s = "Mr.";
else
	$s = "Ms.";
?>

<html>
<head>
	<style>
		body { 
			margin:0 auto;
			background-color:white;
			text-align:center;
		}
		table {
			width:60%;
			text-align:left;
			margin:0 auto;
			margin-top:50px;
			border:1px solid black;
			padding: 10px 15px;	
		}
		
		td {
			padding: 8px 5px;
			vertical-align:top;
			border-collapse:collapse;
		}
		
		th {
			font-size:20px;
			text-align:center;
			font-weight:bolder;
			background-color: #777777;
			color:white;
			height:45px;
		}
		tr:nth-child(even) {
			background-color:#cccccc;
		}
		
	</style>
</head>
<body>

<table>
<tr><th colspan=3> Job Seeker Details </th></tr>
<tr><td>Your Name </td><td>:</td>
<td> <?php echo "$s $name"; ?> </td></tr>
<tr><td>Your Password </td><td>:</td>
<td> <?php echo "$pass"; ?> </td></tr>
<tr><td>Your Graduation </td><td>:</td>
<td> <?php echo "$degree"; ?> </td></tr>
<tr><td>Your are interested to work with </td>
<td>:</td><td>
<?php
foreach ($place as $p)
	echo $p."<br>";
?>
</td></tr>
<tr><td>Your have applied for the following positions</td><td>:</td><td>
<?php
foreach ($job as $j)
	echo "$j<br>";
?>
</td></tr>
<tr><td>Your comment as follows: </td><td>:</td><td>
<?php echo $comment; ?>
</td></tr>
</table>
</body>
</html>
