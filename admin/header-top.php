<?php 
session_start();
	if(!isset($_SESSION['id'])){
		header("location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">
	/img/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">




      <link rel="stylesheet" href="assets/css/style.css">