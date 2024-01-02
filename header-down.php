</head>
<body>
<header class="header_tow">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>    
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
        					<ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+8801765432100</li>
                                <li><i class="flaticon-mail-black-envelope-symbol"></i>nuruzzamanpolytechnic@gmail.com</li>
        					</ul>                    
                        </div>
                        <div class="login_info">
                             <ul class="d-flex">
                                <li class="nav-item"><a href="register" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                                <li class="nav-item"><a href="login" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Lon In</a></li>
                            </ul>
                            <a href="add-student.php" title="" class="apply_btn">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Students</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="add-student.php" class="nav-link">Add Student</a></li>
                                <li class="nav-item"><a href="view-student.php" class="nav-link">View Students Info</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Courses</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="#" class="nav-link">Diploma  Engineering</a></li>
                                    </ul>    
                                </li>                              
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Department</a>
                                    <ul class="navbar-nav nav mx-auto">
									<?php 
										include("connect.php");
										$department_query = mysqli_query($connect,"SELECT * FROM departments");
										while($department_info = mysqli_fetch_array($department_query)):
									?>
                                        <li class="nav-item"><a href="#" class="nav-link"><?php echo $department_info['name'];?></a></li> 
										<?php 
											endwhile;
										?>
                                    </ul>    
                                </li> 
                                <li class="nav-item"><a href="become-a-teacher.php" class="nav-link">Become A Teacher</a></li>
                                <li class="nav-item"><a href="teacher-profile.php" class="nav-link">Teacher Profile</a></li>
                                <li class="nav-item"><a href="forgot-password.php" class="nav-link">Forgot Password</a></li>
                            </ul>                            
                        </li>
                        <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
</header>