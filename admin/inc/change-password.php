<?php 
include("connect.php");
if(!isset($_REQUEST['id'])){
	header("location: index.php");
}
$id = $_REQUEST['id'];
$opass = $_REQUEST['opass'];
$npass = $_REQUEST['npass'];
$cpass = $_REQUEST['cpass'];
if($npass == $cpass){
	$npass =md5(sha1($npass));
	$opass =md5(sha1($opass));
	$query = mysqli_query($connect,"SELECT * FROM user_info WHERE pass='$opass' AND id='$id'");
	$count_query=mysqli_num_rows($query);
	if($count_query==1){
		$update_query = mysqli_query($connect,"UPDATE user_info SET pass='$npass' WHERE id='$id'");
		if($update_query){
			header("location: ../index.php?result=change_success");
		}else{
			header("location: ../index.php?result=change_wrong");
		}
	}
}else{
	header("location: ../index.php?result=password_don't_mass");
}