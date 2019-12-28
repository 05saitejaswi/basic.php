<?php

$con = mysqli_connect("localhost","root","");
// mysqli_connect('hostname','username','password', 'db_name');
$a = "create database sample";
if(mysqli_query($con,$a)) {
echo "Database Created Successfully";
}
else {
	echo "database not created"; 
}
?>