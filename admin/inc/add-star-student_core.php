<?php include("connect.php");

$name = $_POST['name'];
$marks = $_POST['marks'];
$percentage = $_POST['percentage'];
$year = $_POST['year'];


	$star_query = mysqli_query($connect,"INSERT INTO star_info(name,marks,percentage,year) VALUES('$name','$marks','$percentage','$year')");
	
	if($star_query){
		header("location: ../add-star-student.php?result=success");
	}else{
		header("location: ../add-star-student.php?result=wrong");
	}