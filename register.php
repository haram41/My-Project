<html>
<head>
	<head>
	<title>Student Registration</title>
	
	<link rel="stylesheet" type="text/css" href="style1.css">
<script src="Validation.js"></script>
<script type="text/javascript">
function validation()
{
if(document.form1.full_name.value=="")
{
alert("Please enter your full name.");
document.form1.full_name.focus();
return false;
}
if(document.form1.father_name.value=="")
{
alert("Please enter your father name.");
document.form1.father_name.focus();
return false;
}
if(document.form1.mother_name.value=="")
{
alert("Please enter your mother name.");
document.form1.mother_name.focus();
return false;
}
if(document.form1.dob.value=="")
{
alert("Please enter your date of birth.");
document.form1.dob.focus();
return false;

}
if(document.form1.email.value=="")
{
alert("Please enter your email.");
document.form1.email.focus();
return false;
}

if(document.form1.address.value == "")
{
alert("You can enter address upto 100 characters only.");
document.form1.address.focus();
return false;
}

if(document.form1.st_id.value=="")
{
alert("Please enter your desired student id.");
document.form1.st_id.focus();
return false;
}
if(document.form1.st_pass.value=="")
{
alert("Please enter your desired password.");
document.form1.st_pass.focus();
return false;
}
if(document.form1.retype.value=="")
{
alert("Please enter retype password.");
document.form1.retype.focus();
return false;
}
if(document.form1.st_pass.value != document.form1.retype.value)
{
alert("Password and retype password are not same.");
document.form1.st_pass.value = "";
document.form1.retype.value = "";
document.form1.st_pass.focus();
return false;
}
}
</script>
	
</head>
<body>
	<h1><img src="img/logo.png" style="width:800px;height:100px;"/></h1>
	
	<a class="stylelink1" href="home.php">Home</a>
	
	<h2>Student Registration Form</h2>
</body>
<form name="form1" method="post" action="Registration_handler.php" onSubmit="return validation()" enctype="multipart/form-data">
	
	<table style="width:100%">
		<tr>
		<td width="100%" height="80%" align="center"><table width="80%"
			border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
		<tr bgcolor="#EEEEEE">
		<td colspan="4" align="center" class="stylemedium">StudentInformation</td>
		</tr>
		
		<tr>
			<td>Full Name</td>
			<td><input name="full_name" type="text" placeholder="First Name" id="full_name" maxlength="50"></td>
			
			<td>Father`s Name</td>
			<td><input name="father_name" type="text" placeholder="Father`s Name" id="father_name" maxlength="50"></td>
		</tr>
		<tr>
			<td>Mother`s Name</td>
			<td><input name="mother_name" type="text" placeholder="Mother`s Name" id="mother_name" maxlength="50"></td>
			<td>Gender</td>
			<td><input name="gender" type="radio" value="Male" checked>Male
			<input name="gender" type="radio" value="Female">Female</td>
		<tr>
			<td>D.O.B</td>
			<td><input name="dob" type="text" size="10" maxlength="10">DD-MM-YYYY</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		
			
		
		<tr class="qualification">
			<td>Qualification</td>
			<td><select name="qualification" >
			<option value="">-----select-----</option>
			<option value="High School">High School</option>
			<option value="Intermediate">Intermediate</option>
			<option value="Graduate">Graduate</option>
			<option value="Post_Graduate">Post Graduate</option>
			</select></td>
		
			<td>Contact No</td>
			<td><input name="contact_no" type="number" maxlength="10"></td>
		</tr>
		
		<tr>
			<td> City</td>
			<td><input name="city" type="text" id="city" maxlength="30"></td>
			<td>Email</td>
			<td><input name="email" type="text" id="email" maxlength="100"></td>
		</tr>
		
		<tr class="Address">
			<td>Address</td>
			<td colspan="3"><textarea name="address" cols="45" rows="2" id="address"></textarea></td>
		</tr>
		
		<tr class="Description">
			<td> Description</td>
			<td colspan="3"><textarea name="description" cols="45" rows="3" id="description"></textarea></td>
		</tr>

		<tr bgcolor="#EEEEEE">
			<td colspan="4" align="center" class="stylemedium">Login Information</td>
		</tr>
		
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>

		<tr class="stylesmall">
			<td>Student ID </td>
			<td><input name="st_id" type="text" id="st_id" maxlength="20"></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		<tr class="Password">
			<td>Password</td>
			<td><input name="st_pass" type="password" id="st_pass" maxlength="20" ></td>
			<td align="right">Retype Password</td>
			<td><input name="retype" type="password" id="retype" maxlength="20"></td>
		</tr>
		
		
		
		<tr bgcolor="#EEEEEE">
			<td colspan="4" align="center" class="stylemedium">Student Document</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>

		<tr class="stylesmall">
			<td>Upload Document</td>
			<td colspan="3"><input name="resume" type="file" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="stylered">.doc , .txt, .pdf file only</span></td>
		</tr>
		
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>

		<tr class="stylesmall">
			<td>Upload Image </td>
			<td colspan="3"><input type="file" name="image" enctype="multipart/form-data">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<spanclass="stylered"><span class="stylered">.jpg file And .gif fileonly</span></td>
		</tr>
			
		<tr>
			<td colspan="4" align="center"><input name="register" type="submit" value="Register">
			<input name="reset" type="reset" id="reset" value="Reset">
			<input name="close" type="button" id="close" value="Close"onClick="self.location='home.php'"></td>
		</tr>
		
		
		
		
		
		


	</table>
</form>


		<footer>
			<section class="footer-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								&copy; 2018 Student Information System |
								<a href="https://instagram.com/" target="_blank"  > Designed by : Mohammad Haram Kafil</a> 
							</div>
						</div>
					</div>
				</section>
		</footer>
</html>