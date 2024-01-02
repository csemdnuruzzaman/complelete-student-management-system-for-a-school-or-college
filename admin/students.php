<?php 
	include("connect.php");
	$query = mysqli_query($connect,"SELECT * FROM std_info");
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>

               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Students</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="#" onclick="window.print();" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-student.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                       <th>Roll</th>
                                       <th>Registration</th>
                                       <th>Email</th>
                                       <th>Semester</th>
                                       <th>Technology</th>
                                       <th>Session</th>
                                       <th>Institute</th>
                                       <th>Address</th>
                                       <th>Date of Birth</th>
                                       <th>School Name</th>
                                       <th>Gender</th>
                                       <th>Created</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
								 <?php 
									while($info = mysqli_fetch_array($query)){
								 ?>
                                    <tr>
                                       <td><?php echo $info['id']; ?></td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php?id=<?php echo $info['id']; ?>" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/<?php echo $info['img']; ?>" alt="<?php echo $info['fname']." ".$info['sname']; ?>"></a>
                                             <a href="student-details.php?id=<?php echo $info['id']; ?>"><?php echo $info['fname']." ".$info['sname']; ?></a>
                                          </h2>
                                       </td>
                                       <td><?php echo $info['roll']; ?></td>
                                       <td><?php echo $info['reg']; ?></td>
                                       <td><?php echo $info['email']; ?></td>
                                       <td><?php echo $info['semester']; ?></td>
                                       <td><?php echo $info['technology']; ?></td>
                                       <td><?php echo $info['session']; ?></td>
                                       <td><?php echo $info['institute']; ?></td>
                                       <td><?php echo $info['address']; ?></td>
                                       <td><?php echo $info['dob']; ?></td>
                                       <td><?php echo $info['schoolname']; ?></td>
                                       <td><?php echo $info['gender']; ?></td>
                                       <td><?php echo $info['created']; ?></td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php?id=<?php echo $info['id']; ?>" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="delete-student.php?id=<?php echo $info['id']; ?>" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    
									<?php 
									}
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