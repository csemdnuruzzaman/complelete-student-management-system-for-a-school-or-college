<?php 
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Departments</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Departments</li>
</ul>
</div>
<div class="col-auto text-right float-right ml-auto">
<a href="#" onclick="window.print();" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
<a href="add-department.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>HOD</th>
<th>Started Year</th>
<th>No of Students</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php 
	include("connect.php");
	$department_query = mysqli_query($connect,"SELECT * FROM departments");
	while($department_info = mysqli_fetch_array($department_query)):
?>

<tr>
<td><?php echo $department_info['id'];?></td>
<td>
<h2>
<a><?php echo $department_info['name'];?></a>
</h2>
</td>
<td><?php echo $department_info['hod'];?></td>
<td><?php echo $department_info['start_year'];?></td>
<td><?php echo $department_info['nos'];?></td>
<td class="text-right">
<div class="actions">
<a href="edit-department.php?id=<?php echo $department_info['id'];?>" class="btn btn-sm bg-success-light mr-2">
<i class="fas fa-pen"></i>
</a>
<a href="delete-department.php?id=<?php echo $department_info['id'];?>" class="btn btn-sm bg-danger-light">
<i class="fas fa-trash"></i>
</a>
</div>
</td>
</tr>

<?php 
	endwhile;
?>

</tbody>
</table>
</div>
</div>
</div>
</div>

<?php 

if(isset($_GET['result'])){
	if($_GET['result']=="delete"){
		echo "<script type='text/javascript'>alert('Delete successful.');</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something is wrong.');</script>";
	}
}
	require("footer.php");
?>