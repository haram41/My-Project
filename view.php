<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1><img src="img/logo.png" style="width:800px;height:100px;"/></h1>

	<p>
	<a class="stylelink1" href="home.php">Home</a>
</body>
<?php


require("myconfig.php");

function getUsersData($id)
{
	$array = array();
	$q = mysql_query("SELECT * FROM st_info WHERE st_id=$st_id");
	while($row = mysql_fetch_assoc($query)){
		$array['st_id'] = $r['st_id'];
		$array['full_name'] = $r['full_name'];
		
	return $array;
}

function getId($st_id)
{
	$q = mysql_query("SELECT * `st_id` FROM `st_info` WHERE `st_id`='".$st_id."'");
	while($r = mysql_fetch_assoc($q))
	{
		return $r['st_id'];
	}
}

function userExists($st_id)
{
	$numrows = mysql_num_rows(mysql_query("SELECT `st_id` FROM `st_info` WHERE `id`=".$id));
	if($numrows==1)
		return true;
	else
		return false;
}




}

 ?>
 <<table style="width=100%">

		<tr>
		<td width="100%" height="80%" align="center"><table width="80%"
			border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
		<tr bgcolor="#EEEEEE">
		<td colspan="6" align="center" class="stylemedium"><font color="black">STUDENT INFORMATION</font></td>
		</tr>
		<tr>
		
		
				</tr>
		<tr>
			<td colspan="1"><font color="black">Full Name</font></td>
			<td colspan="2"><font color="black">$full_name</font></td>
			<td><img src="image/admin.jpg" style="width:150px;height:150px;"/></td>
			
		</tr>	
		<tr>
			<td><font color="black">Father`s Name</font></td>
			<td><font color="black">$fname</font></td>
			</tr>	
		<tr>
		
			<td><font color="black">Mother`s Name</font></td>
			<td><font color="black">$mname</font></td>
		<tr>
			<td><font color="black">D.O.B</font></td>
			<td><font color="black">$dob</font></td>
			
		
		</tr>
		<tr>
			
		

		
			<td><font color="black">Contact No</font></td>
			<td><font color="black">$no</font></td>
		</tr>
		
		<tr>
			<td> <font color="black">City</font></font></td>
			<td><font color="black">$city</font></td>
					</tr>
		
		
		<tr>
			<td><font color="black">Email</font></td>
			<td><font color="black">$email</font></td>
		</tr>
		<tr>
			<td><font color="black">Address</font></td>
			<td><font color="black">$add</font></td>
		</tr>
		
		
		</table>
</html>