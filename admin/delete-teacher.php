<?php 
	include("connect.php");
if(!isset($_REQUEST['id'])){
	header("location: teachers.php");
}
$id = $_REQUEST['id'];
$query = mysqli_query($connect,"DELETE FROM user_info WHERE id='$id'");
if($query){
	header("location: teachers.php?result=delete");
}else{
	header("location: teacher.php?result=wrongdelete");
}