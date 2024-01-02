<?php include("connect.php");
$id = $_GET['id'];
$delete_department = mysqli_query($connect,"DELETE FROM departments WHERE id='$id'");
if($delete_department){
	header("location: departments.php?result=delete");
}else{
	header("location: departments.php?result=wrong_delete");
}