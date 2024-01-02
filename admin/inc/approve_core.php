<?php 
	include("connect.php");
	if(!isset($_REQUEST['id'])){
		header("location: ../index.php");
	}
	$id= $_REQUEST['id'];
	$query = mysqli_query($connect,"INSERT INTO user_info(SELECT * FROM apply_user WHERE id='$id')");
	
	if($query){
		$delete_query = mysqli_query($connect,"DELETE FROM apply_user WHERE id='$id'");
		if($delete_query){
			header("location: ../index.php?result=success");
		}else{
			header("location: ../index.php?result=wrong_delete");
		}
	}else{
		header("location: ../index.php?result=wrong_new_query");
	}