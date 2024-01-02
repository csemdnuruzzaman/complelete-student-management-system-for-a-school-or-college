<?php include("connect.php");
$email = $_REQUEST['email'];
$pass= $_REQUEST['password'];
$pass = md5(sha1($pass));
$query_operation = mysqli_query($connect,"SELECT * FROM user_info WHERE email='$email' AND pass='$pass'");

$query_count = mysqli_num_rows($query_operation);

$query_operation_info = mysqli_fetch_array($query_operation);

if($query_count==1){
	header("location: ../../admin/index.php");
	session_start();
	$_SESSION['id']= $query_operation_info['id'];
}else{
	header("location: ../index.php?result=wrong");
}