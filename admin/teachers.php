<?php 
	include("connect.php");
	$query=mysqli_query($connect,"SELECT * FROM user_info");
	require("header-top.php");
?>

<?php
	require("header-bottom.php");
?>

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Teachers</li>
</ul>
</div>
<div class="col-auto text-right float-right ml-auto">
<a href="#" onclick="window.print();" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
<a href="add-teacher.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
<th>Full Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Username</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php while($info=mysqli_fetch_array($query)): 

?>
		<tr>
		<td><?php echo $info['id']; ?></td>
		<td>
		<h2 class="table-avatar">
		<a href="teacher-details.php?id=<?php echo $info['id']; ?>" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/<?php echo $info['img']; ?>" alt="User Image"></a>
		<a href="teacher-details.php?id=<?php echo $info['id']; ?>"><?php echo $info['name']; ?></a>
		</h2>
		</td>
		<td><?php echo $info['email']; ?></td>
		<td><?php echo $info['phone']; ?></td>
		<td><?php echo $info['dob']; ?></td>
		<td><?php echo $info['gender']; ?></td>
		<td><?php echo $info['username']; ?></td>
		<td class="text-right">
		<div class="actions">
		<a href="edit-teacher.php?id=<?php echo $info['id']; ?>" class="btn btn-sm bg-success-light mr-2">
		<i class="fas fa-pen"></i>
		</a>
		<a href="delete-teacher.php?id=<?php echo $info['id']; ?>" class="btn btn-sm bg-danger-light">
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