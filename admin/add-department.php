<?php 
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Department</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="departments.php">Department</a></li>
<li class="breadcrumb-item active">Add Department</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="inc/add-department_core.php" method="post" >
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Department Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Department Name</label>
<input required name="name" type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Head of Department</label>
<input name="hod" required type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Department Start Date</label>
<input name="start_year" required type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>No of Students</label>
<input name="nos" required type="text" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php 

if(isset($_GET['result'])){
	if($_REQUEST['result']=="success"){
		echo "<script type='text/javascript'>alert('Submit successfull.');</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something is wrong.');</script>";
	}
}

	require("footer.php");
?>