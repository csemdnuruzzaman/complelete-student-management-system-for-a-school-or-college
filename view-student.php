<?php 
include("connect.php");
	require("header-top.php");
?>

<title>View Student</title>
<link rel="stylesheet" type="text/css" href="css/view-student.css" media="all" />

<?php 
	require("header-down.php");
?>
<section class="view-student-info" > 
	<div class="container"> 
		<div class="row"> 
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" > 
				<form action="" method="post" >
					<label for="">Roll Number</label>
					<input required name="roll" class="form-control" type="number" placeholder="Roll" />
					<label for="">Registration Number</label>
					<input required name="reg" class="form-control" type="number" placeholder="Registration" />
					<button class="btn btn-info btn-lg" type="submit" >Show</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php 
	if(isset($_REQUEST['roll'])AND isset($_REQUEST['reg'])){
		
		$roll = $_REQUEST['roll'];
		$reg = $_REQUEST['reg'];
		$query = mysqli_query($connect,"SELECT * FROM std_info WHERE roll='$roll' AND reg='$reg'");
		$info = mysqli_fetch_array($query);
?>
<section class="view-student-query-info" > 
	<div class="container"> 
		<div class="row"> 
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" > 
				<div class="student-query"> 
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
							<img src="admin/assets/img/profiles/<?php echo $info['img'];?>" alt="" />
						</div>
					</div>
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="">Full Name</label>
							<input value="<?php echo $info['fname']." ".$info['sname'];?>" class="form-control" type="text"  disabled />
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="roll">Roll</label>
							<input value="<?php echo $info['roll'];?>" disabled class="form-control" type="number"  id="roll">
						</div>
					</div>

					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="reg">Registration</label>
							<input  value="<?php echo $info['reg'];?>" disabled class="form-control" type="number"  id="reg">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="email">Email</label>
							<input   value="<?php echo $info['email'];?>"  disabled class="form-control" type="email" id="email">
						</div>
					</div>

					

					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="semester">Semester</label>
							<input   value="<?php echo $info['semester'];?>"  disabled class="form-control" type="text"  id="semester">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="tech">Technology</label>
							<input   value="<?php echo $info['technology'];?>"  disabled class="form-control" type="email"  id="tech">
						</div>
					</div>


					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="session">Session</label>
							<input  value="<?php echo $info['session'];?>"  disabled class="form-control" type="text"  id="session">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="institute">Institute</label>
							<input   value="<?php echo $info['institute'];?>" disabled class="form-control" type="text"  id="institute">
						</div>
					</div>

					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="add">Address</label>
							<input   value="<?php echo $info['address'];?>"  disabled class="form-control" type="text"  id="add">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="date">Date of Birth</label>
							<input  value="<?php echo $info['dob']?>"  disabled class="form-control" type="text"  id="date">
						</div>
					</div>

					

					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="school">Previous School Name</label>
					<input   value="<?php echo $info['dob'];?>"  disabled class="form-control" type="text" id="school">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="gender">Gender</label>
							<input   value="<?php echo $info['gender'];?>"  disabled class="form-control" type="text"  id="gender">
						</div>
					</div>

					<label for="created">Created</label>
					<input  value="<?php echo $info['created'];?>"  disabled  class="form-control" type="text"  id="created">
					
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
	}
?>
<?php 
	require("footer.php");
?>