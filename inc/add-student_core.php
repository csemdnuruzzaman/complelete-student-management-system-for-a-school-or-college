<?php 
include("connect.php");

$query=mysqli_query($connect,"SELECT * FROM std_info");
$info = mysqli_fetch_array($query);
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$roll = $_POST['roll'];
$reg = $_POST['reg'];
$email = $_POST['email'];
$semester = $_POST['semester'];
$technology = $_POST['technology'];
$session = $_POST['session'];
$institute = $_POST['institute'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$schoolname = $_POST['schoolname'];
$gender = $_POST['gender'];
$file_name = $_FILES['img']['name'];
$file_type = $_FILES['img']['type'];
$file_type=substr($file_type,6);
$file_name = md5($file_name).".".$file_type;
$file_tmp_name = $_FILES['img']['tmp_name'];

date_default_timezone_set('Asia/Dhaka');
$date = date('d-m-y h:i:s A');

if($info['roll']==$roll){
	header("location: ../add-student.php?result=have");
}else{
	$new_query = mysqli_query($connect,"INSERT INTO std_info(fname,sname,roll,reg,email,semester,technology,session,institute,address,dob,schoolname,gender,created,img) VALUES('$fname','$sname','$roll','$reg','$email','$semester','$technology','$session','$institute','$address','$dob','$schoolname','$gender','$date','$file_name')");
	move_uploaded_file($file_tmp_name,"../admin/assets/img/profiles/".$file_name);
	if($new_query){
		header("location: ../add-student.php?result=success");
	}else{
		header("location: ../add-student.php?result=wrong");
	}
}