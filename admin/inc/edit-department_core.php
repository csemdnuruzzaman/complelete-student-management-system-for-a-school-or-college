<?php include("connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$hod = $_POST['hod'];
$start_year = $_POST['star_year'];
$nos = $_POST['nos'];


	$star_query = mysqli_query($connect,"UPDATE departments SET name='$name',hod='$hod',start_year='$start_year',nos='$nos' WHERE id='$id'");
	
	if($star_query){
		header("location: ../departments.php?result=success");
	}else{
		header("location: ../departments.php?result=wrong");
	}