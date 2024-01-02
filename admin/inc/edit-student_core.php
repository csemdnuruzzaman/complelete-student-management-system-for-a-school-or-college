<?php include("connect.php");
if(!isset($_POST['id'])){
	header("location: ../students.php");
}
$id = $_POST['id'];
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



	$new_query = mysqli_query($connect,"UPDATE std_info SET fname='$fname',sname='$sname',roll='$roll',reg='$reg',email='$email',semester='$semester',technology='$technology',session='$session',institute='$institute',address='$address',dob='$dob',schoolname='$schoolname',gender='$gender',img='$file_name' WHERE id='$id'"); 
	
	move_uploaded_file($file_tmp_name,"../assets/img/profiles/".$file_name);
	if($new_query){
		header("location: ../students.php?result=update_success");
	}else{
		header("location: ../students.php?result=update_wrong");
	}