<?php

$con = mysqli_connect("localhost","root","","sample");
$sql = "create table tbllogin(username varchar(30), password varchar(30))";
if(mysqli_query($con,$sql)) {echo "Table Created Successfully";
}
else 
{echo "Table not created";}
?>