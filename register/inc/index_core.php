<?php 
	include("connect.php");
	
	$name = $_REQUEST['name'];
	$file_name = $_FILES['img']['name'];
	$file_type = $_FILES['img']['type'];
	$file_type=substr($file_type,6);
	$file_name = md5($file_name).".".$file_type;
	$file_tmp_name = $_FILES['img']['tmp_name'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$username = $_REQUEST['username'];
	$pass = $_REQUEST['password'];
	$pass = md5(sha1($pass));
	
	date_default_timezone_set('Asia/Dhaka');
	$date = date('d-m-y h:i:s A');
	
	$query = mysqli_query($connect,"SELECT * FROM user_info");
	$info = mysqli_fetch_array($query);
	if($info['username']==$username){
		header("location: ../index.php?result=username");
	}else{
		$new_query=mysqli_query($connect,"INSERT INTO apply_user(name,img,email,phone,dob,gender,pass,username,created) VALUES('$name','$file_name','$email','$phone','$dob','$gender','$pass','$username','$date')");
		if($new_query){
			header("location: ../index.php?result=success");
			move_uploaded_file($file_tmp_name,"../../admin/assets/img/profiles/".$file_name);
		}else{
			header("location: ../index.php?result=wrong");
		}
	}
