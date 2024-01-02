<?php 
include("header-top.php");

?>
<title>Add Student</title>
<link rel="stylesheet" type="text/css" href="css/add-student.css" media="all" />
<?php 
include("header-down.php");

?>
<section class="student_info_wrapper" > 
	<div class="container"> 
		<div class="row"> 
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" > 
				<form action="inc/add-student_core.php" method="post" enctype="multipart/form-data" >
					<h3>Submit Your Infomation</h3>
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="fname">First Name</label>
							<input name="fname" required class="form-control" type="text" placeholder="First Name" id="fname">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="sname">Sur Name</label>
							<input name="sname" required class="form-control" type="text" placeholder="Sur Name" id="sname">
						</div>
					</div>
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="roll">Roll</label>
							<input name="roll" required class="form-control" type="number" placeholder="Roll" id="roll">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="reg">Registration</label>
							<input name="reg" required class="form-control" type="number" placeholder="Registration" id="reg">
						</div>
					</div>
					
					
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="email">Email</label>
							<input name="email" required class="form-control" type="email" placeholder="Email" id="email">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
						 <div class="form-group">
							 <label for="">Semester</label>
							 <select name="semester" required class="form-control" id="exampleFormControlSelect1">
											  <option selected>Semester</option>
											  <option value="1st">1st</option>
											  <option value="2nd">2nd</option>
											  <option value="3rd">3rd</option>
											  <option value="4th">4th</option>
											  <option value="5th">5th</option>
											  <option value="6th">6th</option>
											  <option value="7th">7th</option>
											  <option value="8th">8th</option>
							</select>
						</div>
						</div>
					</div>
					
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							 <div class="form-group">
								 <label for="">Technology</label>
								 <select name="technology" required class="form-control" id="exampleFormControlSelect1">
											  <option selected>Technology</option>
											  <option value="Computer Science">Computer Science</option>
											  <option value="Mechnical">Mechnical</option>
											  <option value="Electronics">Electronics</option>
											  <option value="Civil">Civil</option>
											  <option value="Data Communication">Data Communication</option>
											  <option value="Textile">Textile</option>
											  <option value="Food">Food</option>
											  <option value="Chemical">Chemical</option>
											  <option value="Architecture">Architecture</option>
											  <option value="Surveying">Surveying</option>
											  <option value="Auto Mobile">Auto Mobile</option>
											  <option value="Electrical">Electrical</option>
											  <option value="Garments Design & Pattern Making">Garments Design & Pattern Making</option>
											  <option value="Refrigeration And Air Conditioning">Refrigeration And Air Conditioning</option>
											  <option value="Environmental Studies">Environmental Studies</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="session">Session</label>
							<input name="session" class="form-control" type="text" placeholder="Session" id="session">
						</div>
					</div>
					
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<div class="form-group">
								 <label for="">Institute</label>
								 <select name="institute" required class="form-control" id="exampleFormControlSelect1">
								  <option selected>Institute</option>
										  <option value="B.Baria Polytechnic Institute">B.Baria Polytechnic Institute</option>
										  <option value="Barguna Polytechnic Institute">Barguna Polytechnic Institute</option>
										  <option value="Barishal Polytechnic Institute">Barishal Polytechnic Institute</option>
										  <option value="Bangladesh Institute Of Glass And Ceramics">Bangladesh Institute Of Glass And Ceramics</option>
										  <option value="Bangladesh Survey Institute">Bangladesh Survey Institute</option>
										  <option value="Bangladesh Sweeden Polytechnic Institute">Bangladesh Sweeden Polytechnic Institute</option>
										  <option value="Bhola Polytechnic Institute">Bhola Polytechnic Institute</option>
										  <option value="Bogura Polytechnic Institute">Bogura Polytechnic Institute</option>
										  <option value="Chandpur Polytechnic Institute">Chandpur Polytechnic Institute</option>
										  <option value="Chapainababgonj Polytechnic Institute">Chapainababgonj Polytechnic Institute</option>
										  <option value="Chittagong Mohila Polytechnic Institute">Chittagong Mohila Polytechnic Institute</option>
										  <option value="Chittagong Polytechnic Institute">Chittagong Polytechnic Institute</option>
										  <option value="Comilla Polytechnic Institute">Comilla Polytechnic Institute</option>
										  <option value="Cox’s Bazar Polytechnic Institute">Cox’s Bazar Polytechnic Institute</option>
										  <option value="Dhaka Mohila Polytechnic Institute">Dhaka Mohila Polytechnic Institute</option>
										  <option value="Dhaka Polytechnic Institute">Dhaka Polytechnic Institute</option>
										  <option value="Dinajpur Polytechnic Institute">Dinajpur Polytechnic Institute</option>
										  <option value="Faridpur Polytechnic Institute">Faridpur Polytechnic Institute</option>
										  <option value="Feni Polytechnic Institute">Feni Polytechnic Institute</option>
										  <option value="Feni Computer Institute">Feni Computer Institute</option>
										  <option value="Gopalganj Polytechnic Institute">Gopalganj Polytechnic Institute</option>
										  <option value="Graphic Arts Institute">Graphic Arts Institute</option>
										  <option value="Habiganj Polytechnic Institute">Habiganj Polytechnic Institute</option>
										  <option value="Jessore Polytechnic Institute">Jessore Polytechnic Institute</option>
										  <option value="Jhenaidah Polytechnic Institute">Jhenaidah Polytechnic Institute</option>
										  <option value="Khulna Mohila Polytechnic Institute">Khulna Mohila Polytechnic Institute</option>
										  <option value="Khulna Polytechnic Institute">Khulna Polytechnic Institute</option>
										  <option value="Kishoreganj Polytechnic Institute">Kishoreganj Polytechnic Institute</option>
										  <option value="Kurigram Polytechnic Institute">Kurigram Polytechnic Institute</option>
										  <option value="Kushtia Polytechnic Institute">Kushtia Polytechnic Institute</option>
										  <option value="Laxmipur Polytechnic Institute">Laxmipur Polytechnic Institute</option>
										  <option value="Magura Polytechnic Institute">Magura Polytechnic Institute</option>
										  <option value="Moulovibazar Polytechnic Institute">Moulovibazar Polytechnic Institute</option>
										  <option value="Munsiganj Polytechnic Institute">Munsiganj Polytechnic Institute</option>
										  <option value="Mymensingh Polytechnic Institute">Mymensingh Polytechnic Institute</option>
										  <option value="Naogaon Polytechnic Institute">Naogaon Polytechnic Institute</option>
										  <option value="Narshingdi Polytechnic Institute">Narshingdi Polytechnic Institute</option>
										  <option value="Pabna Polytechnic Institute">Pabna Polytechnic Institute</option>
										  <option value="Patuakhali Polytechnic Institute">Patuakhali Polytechnic Institute</option>
										  <option value="Rajshahi Mohila Polytechnic Institute">Rajshahi Mohila Polytechnic Institute</option>
										  <option value="Rajshahi Polytechnic Institute">Rajshahi Polytechnic Institute</option>
										  <option value="Rangpur Polytechnic Institute">Rangpur Polytechnic Institute</option>
										  <option value="Sariatpur Polytechnic Institute">Sariatpur Polytechnic Institute</option>
										  <option value="Satkhira Polytechnic Institute">Satkhira Polytechnic Institute</option>
										  <option value="Sherpur Polytechnic Institute">Sherpur Polytechnic Institute</option>
										  <option value="Sirajganj Polytechnic Institute">Sirajganj Polytechnic Institute</option>
										  <option value="Sylhet Polytechnic Institute">Sylhet Polytechnic Institute</option>
										  <option value="Tangail Polytechnic Institute">Tangail Polytechnic Institute</option>
										  <option value="Thakurgaon Polytechnic Institute">Thakurgaon Polytechnic Institute</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="add">Address</label>
							<input name="address" required class="form-control" type="text" placeholder="Address" id="add">
						</div>
					</div>

					
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
								<label for="date">Date of Birth</label>
								<input name="dob" required placeholder="Select date" type="date" id="date" class="form-control">
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="school">Previous School Name</label>
							<input name="schoolname" required class="form-control" type="text" placeholder="School Name" id="school">
						</div>
					</div>
					
					
					
					<div class="row"> 
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label for="school">Student Picture</label>
							<input name="img" required class="form-control" accept="image/*" type="file"  id="school">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" >
							<label class="form-label" for="">Gender</label>
							 <div class="form-check-inline">
							  <label class="form-check-label">
								<input value="Male" type="radio" class="form-check-input" name="gender">Male
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
								<input value="Female" type="radio" class="form-check-input" name="gender">Female
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
								<input value="Others" type="radio" class="form-check-input" name="gender" >Others
							  </label>
							</div> 
						</div>
					</div>
					<button class="btn btn-info btn-lg" type="submit" >Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
	
<?php 
if(isset($_GET['result'])){
	if($_REQUEST['result']=="have"){
		echo "<script type='text/javascript'>alert('Already you have an account.');</script>";
	}else if($_REQUEST['result']=="success"){
		echo "<script type='text/javascript'>alert('Submit successfull.');</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something is wrong.');</script>";
	}
}

include("footer.php");

?>