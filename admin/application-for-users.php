<?php 
if(!isset($_REQUEST['id'])){
	header("location: index.php");
}
include("connect.php");
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

<div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Apply</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Profile</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="#" onclick="window.print();" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                     </div>
                  </div>
               </div>
			   
			   <?php 
					$id = $_REQUEST['id'];
					$query = mysqli_query($connect,"SELECT * FROM apply_user WHERE id='$id'");
					$info = mysqli_fetch_array($query);
			   ?>
<div class="col-md-12">
                     <div class="profile-header">
                        <div class="row align-items-center">
                           <div class="col-auto profile-image">
                              <a href="#">
                              <img style="max-height:120px;" class="rounded-circle" alt="User Image" src="assets/img/profiles/<?php echo $info['img'];?>">
                              </a>
                           </div>
                           <div class="col ml-md-n2 profile-user-info">
                              <h4 class="user-name mb-0"><?php echo $info['name'];?></h4>
                              <h6 class="text-muted"><?php echo $info['phone'];?></h6>
                           </div>
                           <div class="col-auto profile-btn">
                              <a href="inc/approve_core.php?id=<?php echo $info['id'];?>"  class="btn btn-info">
                              Approve
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                           <li class="nav-item">
                              <a class="nav-link active" href="inc/decline_core.php?id=<?php echo $info['id'];?>" >Decline</a>
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
                                       </h5>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                          <p class="col-sm-9"><?php echo $info['name'];?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                          <p class="col-sm-9"><?php echo $info['dob'];?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                          <p class="col-sm-9"><a href="mailto:<?php echo $info['img'];?>" class="__cf_email__" ><?php echo $info['email'];?></a></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                          <p class="col-sm-9"><?php echo $info['phone'];?></p>
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