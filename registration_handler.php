<?php
include 'myconfig.php';
$flag = "success";
function rollbackData(){
mysql_query(" ROLLBACK ");
global $flag;
$flag = "error";
if(mysql_error() != null){
die(mysql_error());
}
}
$st_id = $_POST['st_id'];
$st_pass = $_POST['st_pass'];
$full_name = $_POST['full_name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$gender = $_POST['gender'];
$contact_no = $_POST['contact_no'];
$qualification = $_POST['qualification'];
$city = $_POST['city'];
$email = $_POST['email'];
$address = $_POST['address'];
$description = $_POST['description'];
$resume = "";
$image = "";
$dobdate = date("Y-m-d",strtotime($_POST['dob']));
/*
This block is used to check whether the student_id already exits
in database.
*/
$select_query="select st_id from st_info where st_id = '$st_id'";
$result_set = mysql_query($select_query,$link_id);
if($row = mysql_fetch_array($result_set)){
$flag="exists";
header("location:Student_Exists.php?flag=$flag&st_id=$st_id");
die();
}
else{
/*
This block is used to insert the student record in database
if the student_id is already not present in the database.
*/
mysql_query("SET AUTOCOMMIT = 0 ");
if(mysql_error() != null){
die(mysql_error());
}
$sql = "INSERT INTO st_info (st_id, st_pass, full_name, father_name, mother_name, registration_date, gender, dobdate, student_status, contact_no, qualification, city, email, address, description, resume, image) 
			VALUES ('$st_id', '$st_pass', '$full_name', '$father_name', '$mother_name', '$registration_date', '$gender', '$dobdate', 'Disable', '$contact_no', '$qualification', '$city', '$email', '$address', '$description', '$resume', '$image')";

$result = mysql_query($sql,$link_id);
if(mysql_error() != null){
die(mysql_error());
}

{
		include 'image.php';

}


if(isset($_FILES['resume'])){
      $errors= array();
      $file_name = $_FILES['resume']['name'];
      $file_size =$_FILES['resume']['size'];
      $file_tmp =$_FILES['resume']['tmp_name'];
      $file_type=$_FILES['resume']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['resume']['name'])));
      
      $expensions= array("doc","txt","pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 4104204){
         $errors[]='File size must be excately 40 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"resumes/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpg","jpeg","gif");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 4104204){
         $errors[]='File size must be excately 40 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"image/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }



else{
$flag="error";
}
if($flag == "success"){
mysql_query(" COMMIT ");
$flag="success";
if(mysql_error() != null){
die(mysql_error());
}
/*
This block is used to send email to the
successfully registered users.
*/
/*
$to = $email1;
$subject = 'Congratulations';
$message = 'Congratulations you are registered in our
site.\r\n\r\n';
$message .= "Your Login Id : $student_id \r\n Password :
$student_pass";
$headers = "From: info@sims.com\r\n";
$headers .= 'X-Mailer: PHP' . phpversion();
mail($to, $subject, $message, $headers);
*/
}
header("location:Student.php?flag=$flag");
die();
}
?>