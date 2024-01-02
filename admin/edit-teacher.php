<?php 
include("connect.php");
if(!isset($_REQUEST['id'])){
	header("location: teachers.php");
}
$id = $_REQUEST['id'];
$query=mysqli_query($connect,"SELECT * FROM user_info WHERE id='$id'");
$info = mysqli_fetch_array($query);

	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Edit Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
<li class="breadcrumb-item active">Edit Teachers</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="inc/edit-teacher_core.php" method="post" enctype="multipart/form-data" >
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form action="inc/edit-teacher_core.php" method="POST" enctype="multipart/form-data" >
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Teacher Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Full Name</label>
                                       <input required name="name" type="text" class="form-control" value="<?php echo $info['name'];?>" >
                                       <input type="hidden" name='id' value="<?php echo $info['id'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Emaill</label>
                                       <input required name="email" type="email" class="form-control" value="<?php echo $info['email'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Teacher Picture</label>
                                       <input required name="img" type="file" accept="image/*" class="form-control" value="<?php echo $info['img'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Phone Number</label>
                                       <input required name="phone" type="text" class="form-control" value="<?php echo $info['phone'];?>" >
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Date of Birth</label>
                                       <input required name="dob" type="date" class="form-control" value="<?php echo $info['dob'];?>" >
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <input required name="gender" type="text" class="form-control" value="<?php echo $info['gender'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Username</label>
                                       <input required name="username" type="text" class="form-control" value="<?php echo $info['username'];?>" >
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
</div>

<?php 

if(isset($_GET['result'])){
	if($_GET['result']=="success"){
		echo "<script type='text/javascript'>alert('Update successful.');</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something is wrong.');</script>";
	}
}
	require("footer.php");
?>