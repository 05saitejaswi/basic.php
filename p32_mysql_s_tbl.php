<?php
$con = mysqli_connect("localhost","root","","sample");
$sql = "select username from tbllogin";
$res = mysqli_query($con,$sql);
// object
// array
// associative array
while($row = mysqli_fetch_array($res)) {
    	print_r($row);

	print_r($row[0]);

}
mysqli_close($con);
?>


