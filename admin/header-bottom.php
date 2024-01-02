   <?php 
      include("connect.php");
   $login_id = $_SESSION['id'];
   $login_query = mysqli_query($connect,"SELECT * FROM user_info WHERE id='$login_id'");

   ?>
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="index.php" class="logo">
               <img src="assets/img/logo.png" alt="Logo">
               </a>
               <a href="index.php" class="logo logo-small">
               <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
            </a>
            <div class="top-nav-search">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
               </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
               <li class="nav-item dropdown noti-dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="far fa-bell"></i> 
				  
				 
				  <?php
				  $count =0;
				  $query_count = mysqli_query($connect,"SELECT * FROM apply_user");
							while($info_count=mysqli_fetch_array($query_count)){
								$count++;
							}
							if($count==0){
								
							}else{
							echo " <span class='badge badge-pill' style='background:red'>".$count."</span>";
							}
				  ?>
				 
                  </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                     </div>
                     <div class="noti-content">
                        <ul class="notification-list">
						<?php 
							
							$query_noti = mysqli_query($connect,"SELECT * FROM apply_user");
							while($info_noti=mysqli_fetch_array($query_noti)):
						?>
                           <li class="notification-message">
                              <a href="application-for-users.php?id=<?php echo $info_noti['id'];?>">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/<?php echo $info_noti['img'];?>">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title"><?php echo $info_noti['name'];?></span> is requesting <span class="noti-title">to approve</span></p>
                                       <p class="noti-time"><span class="notification-time"><?php echo $info_noti['created'];?></span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
						   <?php 
								endwhile;
						   ?>
                        </ul>
                     </div>
                     <div class="topnav-dropdown-footer">
                        <a href="application-for-users.php">View all Notifications</a>
                     </div>
                  </div>
               </li>
			   <?php 
					$login_info = mysqli_fetch_array($login_query);
			   ?>
               <li class="nav-item dropdown has-arrow">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/<?php echo $login_info['img'];?>" width="31" height="31" alt="" ></span>
                  </a>
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src="assets/img/profiles/<?php echo $login_info['img'];?>" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                           <h6><?php echo $login_info['name'];?></h6>
                           <p class="text-muted mb-0">Administrator</p>
                        </div>
                     </div>
                     <a class="dropdown-item" href="profile.php?id=<?php echo $login_info['id'];?>">My Profile</a>
                     <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
               </li>
            </ul>
         </div>       


		 
		 <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">
                        <span>Main Menu</span>
                     </li>
                     <li class="submenu active">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="index.php" class="active">Admin Dashboard</a></li>
                           <li><a href="teacher-dashboard.php">Teacher Dashboard</a></li>
                           <li><a href="student-dashboard.php">Student Dashboard</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="students.php">Student List</a></li>
                           <li><a href="add-student.php">Student Add</a></li>
                           <li><a href="add-star-student.php">Add Star Student</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="teachers.php">Teacher List</a></li>
                           <li><a href="add-teacher.php">Teacher Add</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="departments.php">Department List</a></li>
                           <li><a href="add-department.php">Department Add</a></li>
                        </ul>
                     </li>
                     <li class="menu-title">
                        <span>Pages</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="application-for-users.php">Application for users</a></li>
                           <li><a href="error-404.php">Error Page</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="page-wrapper">
            <div class="content container-fluid">