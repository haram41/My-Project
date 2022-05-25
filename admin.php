<!DOCTYPE html>
<html>
<head>
		
		<title>Admin Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			.box{
				box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
				position: relative;
				border-radius: 3px;
				background: #ffffff;
				border-top: 3px solid #d2d6de;
				margin-bottom: 20px;
				width: 100%;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
function validate()
{
if(document.form1.st_id.value=="")
{
alert("Please enter your login Id.");
document.form1.st_id.focus();
return false;
}
if(document.form1.st_pass.value=="")
{
alert("Please enter your password.");
document.form1.st_pass.focus();
return false;
}
}
</script>
</head>
<body>
	<div class="jumbotron text-center">
		<h1><img src="img/logo.png" style="width:800px;height:100px;"/></h1>
	
	</div>
	<p>
			<a class="stylelink1" href="home.php">Home</a>
	</P>
	<div class="container">
		<form name="form1" align="CENTER" action="auth.php" method="post">
			<div class="col-md-6 box">
				<div class="form-group" style="padding-top:2%">
					<label for="username">Username</label>
					<input name="username" type="text" class="form-control" id="username" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input name="password" type="password" class="form-control" id="password" />
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" style="width:50%" value="Submit"/>
					
				</div>
			<div class="e1">
	
					<img src="img/ADC-logo.jpg" style="width500px;height:500px" ;/>
	
			</div>
			</div>
		</form>
	</div>
		<footer>
		
			<section class="footer-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							&copy; 2018 Student Information System |<a href="https://instagram.com/" target="_blank"  > Designed by : Mohammad Haram Kafil</a> 
						</div>

					</div>
				</div>
			</section>
		</footer>
	<?php
		session_start();
		
		?>	

</body>
</html>