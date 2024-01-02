<?php include("connect.php");

$name = $_POST['name'];
$hod = $_POST['hod'];
$start_year = $_POST['start_year'];
$nos = $_POST['nos'];


	$star_query = mysqli_query($connect,"INSERT INTO departments(name,hod,start_year,nos) VALUES('$name','$hod','$start_year','$nos')");
	
	if($star_query){
		header("location: ../add-department.php?result=success");
	}else{
		header("location: ../add-department.php?result=wrong");
	}