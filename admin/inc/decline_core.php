<?php
	include("connect.php");
	if(!isset($_REQUEST['id'])){
		header("location: ../index.php");
	}
	$id=$_REQUEST['id'];
	$query = mysqli_query($connect,"DELETE FROM apply_user WHERE id='$id'");
	if($query){
		header("location: ../index.php?result=success_delete");
	}else{
		header("location: ../index.php?result=wrong_delete");
	}