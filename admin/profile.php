<?php 
include("connect.php");
$pro_id = $_GET['id'];
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

               <div class="page-header">
                  <div class="row">
                     <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Profile</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
			   
			   <?php 
						$pro_query=mysqli_query($connect,"SELECT * FROM user_info WHERE id='$pro_id'");
						$pro_info = mysqli_fetch_array($pro_query);
			   ?>
			   
                  <div class="col-md-12">
                     <div class="profile-header">
                        <div class="row align-items-center">
                           <div class="col-auto profile-image">
                              <a href="#">
                              <img style="height:120px;" class="rounded-circle" alt="User Image" src="assets/img/profiles/<?php echo $pro_info['img'];?>">
                              </a>
                           </div>
                           <div class="col ml-md-n2 profile-user-info">
                              <h4 class="user-name mb-0"><?php echo $pro_info['name'];?></h4>
                              <h6 class="text-muted">Teacher</h6>
                           </div>
                        </div>
                     </div>
                     <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content profile-tab-cont">
                        <div class="tab-pane fade show active" id="per_details_tab">
                           <div class="row">
                              <div class="col-lg-9">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Personal Details</span>
                                          <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="far fa-edit mr-1"></i>Edit</a>
                                       </h5>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                          <p class="col-sm-9"><?php echo $pro_info['name'];?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                          <p class="col-sm-9"><?php echo $pro_info['dob'];?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                          <p class="col-sm-9"><a href="mailto:<?php echo $pro_info['email'];?>" class="__cf_email__" ><?php echo $pro_info['email'];?></a></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                          <p class="col-sm-9"><?php echo $pro_info['phone'];?></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Account Status</span>
                                          <a class="edit-link" href="edit-teacher.php?id=<?php echo $pro_id?>"><i class="far fa-edit mr-1"></i> Edit</a>
                                       </h5>
                                       <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Skills </span>
                                          <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a>
                                       </h5>
                                       <div class="skill-tags">
                                          <span>Html5</span>
                                          <span>CSS3</span>
                                          <span>WordPress</span>
                                          <span>Javascript</span>
                                          <span>Android</span>
                                          <span>iOS</span>
                                          <span>Angular</span>
                                          <span>PHP</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="password_tab" class="tab-pane fade">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="card-title">Change Password</h5>
                                 <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                       <form action="inc/change-password.php" method="post">
                                          <div class="form-group">
                                             <label>Old Password</label>
                                             <input name="opass" required type="password" class="form-control">
                                             <input name="id"  type="hidden" value="<?php echo $pro_info['id'];?>" >
                                          </div>
                                          <div class="form-group">
                                             <label>New Password</label>
                                             <input name="npass" required type="password" class="form-control">
                                          </div>
                                          <div class="form-group">
                                             <label>Confirm Password</label>
                                             <input name="cpass" required type="password" class="form-control">
                                          </div>
                                          <button class="btn btn-primary" type="submit">Save Changes</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

<?php 
	require("footer.php");
?>