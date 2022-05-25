<?php
include 'myconfig.php';
extract($_POST);
$sql = "SELECT * FROM `st_info` WHERE `st_id`='$st_id' AND `st_pass`='$st_pass'";
$result=mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($result)){
	header('location: view1.php');
	
}
else{
	$_SESSION['error']="1";
	
	header('location: student.php');
}