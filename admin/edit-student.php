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
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Edit Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                           <li class="breadcrumb-item active">Edit Students</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form action="inc/edit-student_core.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input required type="text" name="fname" class="form-control" value="<?php echo $info['fname'];?>" >
                                       <input type="hidden" name="id"  value="<?php echo $info['id'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input required type="text" name="sname" class="form-control" value="<?php echo $info['sname'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Roll Number</label>
                                       <input required name="roll" type="number" class="form-control" value="<?php echo $info['roll'];?>" >
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Registration Number</label>
                                       <input required name="reg" type="number" class="form-control" value="<?php echo $info['reg'];?>" >
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Email</label>
                                       <input required name="email" type="email" class="form-control" value="<?php echo $info['email'];?>" >
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                       <div class="form-group">
											<label for="">Semester</label>
											<select name="semester" required class="form-control"  value="<?php echo $info['semester'];?>" id="exampleFormControlSelect1">
											  <option  selected>Semester</option>
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
								 
                                 <div class="col-12 col-sm-6">
                                      <div class="form-group">
										 <label for="">Technology</label>
										 <select name="technology" required value="<?php echo $info['technology'];?>" class="form-control" id="exampleFormControlSelect1">
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
								 
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Session</label>
                                       <input required name="session" type="text" class="form-control" value="<?php echo $info['session'];?>" >
                                    </div>
                                 </div>
								 
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
										 <label for="">Institute</label>
										 <select name="institute" required class="form-control" value="<?php echo $info['institute'];?>" id="exampleFormControlSelect1">
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
								 
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Address</label>
                                       <input required name="address" type="text" class="form-control" value="<?php echo $info['address'];?>" >
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
											<label for="date">Date of Birth</label>
											<input name="dob" required placeholder="Select date" type="date" id="date" class="form-control" value="<?php echo $info['dob'];?>" >
										</div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label for="school">Previous School Name</label>
										<input name="schoolname" required class="form-control" type="text" placeholder="School Name" id="school" value="<?php echo $info['schoolname'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label for="school">Student Picture</label>
										<input name="img" required class="form-control" accept="image/*" type="file"  id="school" value="<?php echo $info['img'];?>" >
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select required name="gender" value="<?php echo $info['gender'];?>" class="form-control">
                                          <option selected >Select Gender</option>
                                          <option value="Female" >Female</option>
                                          <option value="Male" >Male</option>
                                          <option value="Others" >Others</option>
                                       </select>
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
         </div>
      </div>

<?php 

if(isset($_GET['result'])){
	if($_GET['result']=="update_success"){
		echo "<script type='text/javascript'>alert('Update successful.');</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something is wrong.');</script>";
	}
}
	require("footer.php");
?>