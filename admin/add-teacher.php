<?php 
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
<li class="breadcrumb-item active">Add Teachers</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="inc/add-teacher_core.php" enctype="multipart/form-data" method="post" >
<div class="row">
<div class="col-12">
	<h5 class="form-title"><span>Basic Details</span></h5>
</div>

	<div class="col-12 col-sm-6">
		<div class="form-group">
			<label>Full Name</label>
			<input name="name" type="text" class="form-control">
		</div>
	</div>
	<div class="col-12 col-sm-6">
		<div class="form-group">
			<label>Teacher Picture</label>
			<input name="img" type="file" accept="image/*" class="form-control">
		</div>
	</div>
	
	<div class="col-12 col-sm-6">
		<div class="form-group">
			<label>Email</label>
			<input name="email" type="email"  class="form-control">
		</div>
	</div>
	
	<div class="col-12 col-sm-6">
		<div class="form-group">
			<label>Phone Number</label>
			<input name="phone" type="text"  class="form-control">
		</div>
	</div>
	<div class="col-12 col-sm-6">
		<div class="form-group">
			<label>Date of Birth</label>
			<input name="dob" type="date"  class="form-control">
		</div>
	</div>
	<div class="col-12 col-sm-6">
		<div class="form-group">
			<label>Gender</label>
			<select name="gender" class="form-control">
				<option selected>Gender</option>
				<option value="Male" >Male</option>
				<option value="Female" >Female</option>
				<option value="Others" >Others</option>
			</select>
		</div>
	</div>
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Username</label>
	<input name="username" type="text" class="form-control">
	</div>
	</div>
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Password</label>
	<input name="password" type="password" class="form-control">
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
	}else if($_REQUEST['result']=="username"){
		echo "<script type='text/javascript'>alert('Please choose another username.');</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something is wrong.');</script>";
	}
}

	require("footer.php");
?>