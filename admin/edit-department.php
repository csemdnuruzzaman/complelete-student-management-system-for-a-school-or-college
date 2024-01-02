<?php 
	include('connect.php');
	if(!isset($_GET['id'])){
		header("location: departments.php");
	}
	$id = $_GET['id'];
	$edit_department_query=mysqli_query($connect,"SELECT * FROM departments WHERE id='$id'");
	$edit_department_info = mysqli_fetch_array($edit_department_query);
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Edit Department</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="departments.html">Department</a></li>
<li class="breadcrumb-item active">Edit Department</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="inc/edit-department_core.php" method="post" >
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Department Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Department Name</label>
<input name="name" required type="text" class="form-control" value="<?php echo $edit_department_info['name'];?>">
<input name="id" type="hidden" value="<?php echo $edit_department_info['id'];?>">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Head of Department</label>
<input name="hod" required type="text" class="form-control" value="<?php echo $edit_department_info['hod'];?>">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Department Start Date</label>
<input name="start_year" required type="text" class="form-control" value="<?php echo $edit_department_info['start_year'];?>">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>No of Students</label>
<input name="nos" required type="text" class="form-control" value="<?php echo $edit_department_info['nos'];?>">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<?php 
	require("footer.php");
?>