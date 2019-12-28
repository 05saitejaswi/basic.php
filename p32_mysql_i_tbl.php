<?php
$con = mysqli_connect("localhost","root","","sample");
$sql = "insert into tbllogin(username,password) values ('bala','bala123')";
//$sql = "UPDATE tbllogin SET username='ramya' where username='sathya'";
//$sql = "DELETE from tbllogin where username='ramya'";
mysqli_query($con,$sql);
	echo "data inserted successfully";
?>
