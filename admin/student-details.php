<?php 
	include("connect.php");
	if(!isset($_REQUEST['id'])){
		header("location: students.php");
	}
	$id = $_REQUEST['id'];
	$query = mysqli_query($connect,"SELECT * FROM std_info WHERE id='$id'");
	$info = mysqli_fetch_array($query);
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Student Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Student Details</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">
<h4>About Me</h4>
<div class="media mt-3">
<img src="assets/img/profiles/<?php echo $info['img'];?>" class="mr-3" alt="...">
<div class="media-body">
<ul>
<li>
<span class="title-span">Full Name : </span>
<span class="info-span"><?php echo $info['fname']." ".$info['sname']; ?></span>
</li>
<li>
<span class="title-span">Semester : </span>
<span class="info-span"><?php echo $info['semester'];?></span>
</li>
<li>
<span class="title-span">Technology : </span>
<span class="info-span"><?php echo $info['technology'];?></span>
</li>
<li>
<span class="title-span">Email : </span>
<span class="info-span"><a href="mailto:<?php echo $info['email'];?>" class="__cf_email__" data-cfemail="7216131b010b32151f131b1e5c111d1f"><?php echo $info['email'];?></a></span>
</li>
<li>
<span class="title-span">Gender : </span>
<span class="info-span"><?php echo $info['gender'];?></span>
</li>
<li>
<span class="title-span">DOB : </span>
<span class="info-span"><?php echo $info['dob'];?></span>
</li>
</ul>
</div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<p>Hello I am <?php echo $info['fname']." ".$info['sname'];?>. Currently studying technical education. Getting training in different ways, real and unreal knowledge.</p>
</div>
</div>
<div class="row follow-sec">
<div class="col-md-4 mb-3">
<div class="blue-box">
<h3>2850</h3>
<p>Followers</p>
</div>
</div>
<div class="col-md-4 mb-3">
<div class="blue-box">
<h3>2050</h3>
<p>Following</p>
</div>
</div>
<div class="col-md-4 mb-3">
<div class="blue-box">
<h3>2950</h3>
<p>Friends</p>
</div>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<h5>Permanent Address</h5>
<p><?php echo $info['address'];?></p>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<h5>Present Address</h5>
<p><?php echo $info['address'];?></p>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<div class="skill-info">
<h4>Skills</h4>
<p>Below are some of the many work experiences I have</p>
<ul>
<li>
<label>Graphics Design</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>
</li>
<li>
<label>Web Design</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%"></div>
</div>
</li>
<li>
<label>Web Development</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
</div>
</li>
<li>
 <label>App Development</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
</div>
</li>
</ul>
<div class="row mt-3">
<div class="col-md-12">
<h5>Education</h5>
<p class="mt-3"><?php echo $info['institute'];?></p>
</div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<h5>Certificates</h5>
<p class="mt-3"><?php echo $info['schoolname'];?></p>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<div class="skill-info">
<h4>Settings</h4>
<form>
<div class="row mt-3">
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Current Password</label>
<input type="password" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control">
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

<?php 
	require("footer.php");
?>