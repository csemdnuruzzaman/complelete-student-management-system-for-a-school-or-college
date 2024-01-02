<?php include("header-top.php");?>
<title>Welcome to Dashboard</title>
<?php include("header-bottom.php");?>

			<div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-one w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-user-graduate"></i>
                              </div>
                              <div class="db-info">
                                 <h3>50055</h3>
                                 <h6>Students</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-two w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-crown"></i>
                              </div>
                              <div class="db-info">
                                 <h3>50+</h3>
                                 <h6>Awards</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-three w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-building"></i>
                              </div>
                              <div class="db-info">
                                 <h3>30+</h3>
                                 <h6>Department</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-four w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-file-invoice-dollar"></i>
                              </div>
                              <div class="db-info">
                                 <h3>$505</h3>
                                 <h6>Revenue</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-lg-6">
                     <div class="card card-chart">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col-6">
                                 <h5 class="card-title">Revenue</h5>
                              </div>
                              <div class="col-6">
                                 <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item">
                                       <div class="form-group mb-0 amount-spent-select">
                                          <select class="form-control form-control-sm">
                                             <option>Today</option>
                                             <option>Last Week</option>
                                             <option>Last Month</option>
                                          </select>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div id="apexcharts-area"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-6">
                     <div class="card card-chart">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col-6">
                                 <h5 class="card-title">Number of Students</h5>
                              </div>
                              <div class="col-6">
                                 <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item">
                                       <div class="form-group mb-0 amount-spent-select">
                                          <select class="form-control form-control-sm">
                                             <option>Today</option>
                                             <option>Last Week</option>
                                             <option>Last Month</option>
                                          </select>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div id="bar"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header">
                           <h5 class="card-title">Star Students</h5>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center">
                                 <thead class="thead-light">
                                    <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th class="text-center">Marks</th>
                                       <th class="text-center">Percentage</th>
                                       <th class="text-right">Year</th>
                                    </tr>
                                 </thead>
                                 <tbody>
								 <?php 
									include("connect.php");
									$star_info_query = mysqli_query($connect,"SELECT * FROM star_info");
									while($star_info=mysqli_fetch_array($star_info_query)):
								 ?>
                                    <tr>
                                       <td class="text-nowrap">
                                          <div><?php echo $star_info['id'];?></div>
                                       </td>
                                       <td class="text-nowrap"><?php echo $star_info['name'];?></td>
                                       <td class="text-center"><?php echo $star_info['marks'];?></td>
                                       <td class="text-center"><?php echo $star_info['percentage'];?>%</td>
                                       <td class="text-right">
                                          <div><?php echo $star_info['year'];?></div>
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
                  <div class="col-md-6 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header">
                           <h5 class="card-title">Student Activity</h5>
                        </div>
                        <div class="card-body">
                           <ul class="activity-feed">
                              <li class="feed-item">
                                 <div class="feed-date">Apr 13</div>
                                 <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Mar 21</div>
                                 <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.html">"Carrom"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Feb 2</div>
                                 <span class="feed-text"><a>Justin Lee</a>attended internation conference in <a href="profile.html">"St.John School"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Apr 13</div>
                                 <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Mar 21</div>
                                 <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.html">"Carrom"</a></span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill fb sm-box">
                        <i class="fab fa-facebook"></i>
                        <h6>50,095</h6>
                        <p>Likes</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill twitter sm-box">
                        <i class="fab fa-twitter"></i>
                        <h6>48,596</h6>
                        <p>Follows</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill insta sm-box">
                        <i class="fab fa-instagram"></i>
                        <h6>52,085</h6>
                        <p>Follows</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill linkedin sm-box">
                        <i class="fab fa-linkedin-in"></i>
                        <h6>69,050</h6>
                        <p>Follows</p>
                     </div>
                  </div>


<?php include("footer.php");?>