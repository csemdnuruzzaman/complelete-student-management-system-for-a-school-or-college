<?php include("connect.php");
if(!isset($_REQUEST['name'])){
	header("location: ../blog.php");
}
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comment=$_REQUEST['comment'];
date_default_timezone_set('Asia/Dhaka');
$date = date('d-m-y h:i:s A');
$query = mysqli_query($connect,"INSERT INTO comment(name,email,comment,created) VALUES('$name','$email','$comment','$date')");
if($query){
	header("location: ../blog.php?result?=success");
}else{
	header("location: ../blog.php?result=wrong");
}