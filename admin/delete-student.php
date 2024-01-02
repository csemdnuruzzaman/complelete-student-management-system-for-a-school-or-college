<?php
	include("connect.php");
	if(!isset($_REQUEST['id'])){
		header("location: students.php");
	}
	$id = $_REQUEST['id'];
	$query=mysqli_query($connect,"DELETE FROM std_info WHERE id='$id'");
	if($query){
		header("location: students.php?result=delete");
	}else{
		header("location: students.php?result=delete_wrong");
	}