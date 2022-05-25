<?php
include 'myconfig.php';
extract($_POST);
$sql = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='".md5($password)."'";
$result=mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($result)){
	header('location: adhome.php');
	
}
else{
	$_SESSION['error']="1";
	
	header('location: admin.php');
}