 <?php 
	require("header-top.php");
?>

<?php 
	require("header-bottom.php");
?>              
			   
			   
			   
			   <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Add Star Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.php">Students</a></li>
                           <li class="breadcrumb-item active">Add Star Students</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form action="inc/add-star-student_core.php" method="post" enctype="multipart/form-data" >
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Name</label>
                                       <input name="name" required type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Marks</label>
                                       <input name="marks" required type="number" class="form-control">
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Percentage</label>
                                       <input name="percentage" required type="text" class="form-control">
                                    </div>
                                 </div>
								 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Year</label>
                                       <input name="year" required type="text" class="form-control">
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

if(isset($_GET['result'])){
	if($_REQUEST['result']=="success"){
		echo "<script type='text/javascript'>alert('Submit successfull.');</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something is wrong.');</script>";
	}
}


	require("footer.php");
?>