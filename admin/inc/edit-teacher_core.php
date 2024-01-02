<?php 
	include("connect.php");
	
	$id = $_REQUEST['id'];
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
	
	
	$query = mysqli_query($connect,"SELECT * FROM user_info");
	$info = mysqli_fetch_array($query);
	if($info['username']==$username){
		header("location: ../teachers.php?result=username");
	}else{
		$new_query=mysqli_query($connect,"UPDATE user_info SET name='$name',img='$file_name',email='$email',phone='$phone',dob='$dob',gender='$gender',username='$username' WHERE id='$id'");
		if($new_query){
			header("location: ../teachers.php?result=success");
			move_uploaded_file($file_tmp_name,"../assets/img/profiles/".$file_name);
		}else{
			header("location: ../teachers.php?result=wrong");
		}
	}
