<?php 


	include("connect.php");
	
	require("header-top.php");
?>
<title>Blog Page</title>
<?php 
	require("header-down.php");
?>

<header class="header_inner blog_page">
    <div class="intro_wrapper">
        <div class="container">  
            <div class="row">        
                 <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Welcome To Our Blog Page</h1>
                        <div class="pages_links">
                            <a href="#" title="">Home</a>
                            <a href="#" title="">Blog</a>
                            <a href="#" title="" class="active">Blog Details</a>
                        </div>
                    </div>
                </div>              

            </div>
        </div> 
    </div> 
<header/>
	
<section class="blog_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="blog_post">
                    <h3>Magazine Design Finish The Cover</h3>
                    <div class="post_by d-flex">
                        <span>By - <a href="#" title="" class="bloger_name">Cavien Piterson</a></span>
                        <span>Posted On : Fab 14 2019</span>                        
                        <span><a href="#" title="">Your Category Name</a></span>
                    </div>
                    <img src="images/blog/details_1.png" alt="" class="img-fluid">
                    <div class="postpage_content_wrapper">
                        <div class="social_wrapper">
                            <h4>Share</h4>
                            <ul class="social_items list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog_post_content">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <p class="quite_speech"><i class="fa fa-quote-right"></i>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae id efficitur condimentum, dui nisl ullamcorper diam, at molestie nulla erat gna.</p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <h3>An Additional Point</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <div class="banner">
                                <img src="images/blog/details_2.png" alt="" class="img-fluid">
                                <p><span>Scource : </span>Unflash</p>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="post_response_count d-flex justify-content-between">
                                <ul class="d-flex tags">
                                    <li class="tag_headline">Tags : </li>
                                    <li><a href="#" title="">Piterson, </a></li>
                                    <li><a href="#" title="">Cavien, </a></li>
                                    <li><a href="#" title="">human, </a></li>                    
                                    <li><a href="#" title="">master, </a></li>
                                    <li><a href="#" title="">pleasure</a></li>
                                </ul>
                                <ul class="d-flex comnent_count">
                                    <li><i class="fas fa-thumbs-up"></i>3 Likes</li>
                                    <li><i class="fas fa-comment"></i>2 Comments</li>
                                </ul>  
                            </div>
                            <!-- Blog Comment Wrappper-->
                            <div class="commnet-wrapper">
                                <div class="items_title">
								<?php 
									$query = mysqli_query($connect,"SELECT * FROM comment");
									$count=0;
									while($info = mysqli_fetch_array($query)){
										$count++;
									}
									?>
                                    <h3 class="title"><?php echo $count;  ?> Commnets</h3>
                                </div>
								
								
								
                                 <div class="comment-list-items">
								 
								 <?php 
									$query = mysqli_query($connect,"SELECT * FROM comment");
									
									while($info = mysqli_fetch_array($query)){
										$count=1;
										$count++;
									
								?>
								
                                    <div class="comment-list-wrapper">
                                        <div class="comment-list">
                                            <div class="commnet_img">
                                                <img src="admin/assets/img/profiles/default.jpg" alt="Comment image" class="img-fluid">
                                            </div>
                                            <div class="comment-text">
                                                <div class="author_info"> 
                                                    <div class="author_name">
                                                        <a href="#" class=""><?php echo $info['name']?></a> 
                                                        <span><?php echo $info['created']?></span>
                                                     </div>
                                                     <div class="reply-comment">
                                                        <!--<a href="#" title=""> <i class="flaticon-reply-arrow"></i> Reply</a>-->
                                                    </div> 
                                                </div>     
                                                <p><?php echo $info['comment']?></p>
                                            </div>
                                        </div>

                                    </div>
									
								<?php 
									}
								?>
									
                                </div> 
								
								
                                <!--  Leave Commnent Wrapper -->
                                <div class="leave_comment_wrapper">
                                    <div class="items_title">
                                        <h3 class="title">Leave A Comment</h3>
                                        <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined</p>
                                    </div>
                                    <div class="leave_comment">
                                        <div class="contact_form">
                                            <form action="inc/comment_core.php" method="post" >
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                                       <input required name="name" type="text" class="form-control" id="name"  placeholder="Name">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                                        <input required name="email" type="email" class="form-control" id="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                                        <textarea required name="comment" class="form-control" id="comment" placeholder="Your Comment Wite Here ..."></textarea>
                                                    </div>


                                                     <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                                        <button type="submit" class="text-center">Post Comment</button>
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
            </div> <!-- End Blog Left Side-->

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">

                    <div class="become_a_teacher widget_single">
                        <div class="form-full-box">
                            <div class="form_title">
                                <h2>Become A Membar</h2>
                                <p>Get Instant access to <span>5000+ </span>Video courses </p>
                            </div>
                            <form>
                                <div class="register-form">
                                    <div class="row">
                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="fas fa-user"></i></label>
                                                <input class="form-control" name="name" placeholder="Write Your Name" required="" type="text">
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="flaticon-email"></i></label>
                                                <input class="form-control" name="email" placeholder="Write Your E-mail" required="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group massage_text">
                                                <label><i class="flaticon-copywriting"></i></label>
                                                <textarea class="form-control"  placeholder="Write Something Here" required="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-md-12 register-btn-box">
                                            <button class="register-btn" type="submit">Send Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="recent_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Recent Post</h3>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src="images/blog/side_blog_1.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">How to Become Master In CSS within qa Week.</a>
                                <div class="post-date">
                                    <span>May 29, 2019</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="images/blog/side_blog_2.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Connecting volunteers & nonprofitsz worldwide.</a>
                                <div class="post-date">
                                    <span>25 August, 2019</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="images/blog/side_blog_3.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="post-date">
                                    <span>25 August, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="archives widget_single">
                        <div class="items-title">
                            <h3 class="title">All Categories</h3>
                        </div>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Art & Design </a></li>
                                <li><a href="#" title="">Busness</a></li>
                                <li><a href="#" title="">IT & Software</a></li>
                                <li><a href="#" title="">Languages</a></li>
                                <li><a href="#" title="">Programming</a></li>                                
                                <li><a href="#" title="">Technology</a></li>
                            </ul>
                        </div>
                    </div>  



                    <div class="popular_tags widget_single">
                        <div class="items-title">
                            <h3 class="title">Popular Tags</h3>
                        </div>
                        <div class="tags-items">
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Travel</a></li>
                                <li><a href="#" title="">Amazing</a></li>
                                <li><a href="#" title="">Clean</a></li>
                                <li><a href="#" title="">Responsive</a></li>
                                <li><a href="#" title="">Room</a></li>
                                <li><a href="#" title="">Travel Tips</a></li>
                                <li><a href="#" title="">Tour</a></li>
                                <li><a href="#" title="">Design</a></li>
                            </ul>
                        </div>
                    </div>  


                    <div class="twitter_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Twitter Feed</h3>
                        </div>
                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Jhothan Smith, </a> Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Willian Kane, </a>Lorem ipsum dolor simollirra. Pede phasellus eget.felis dapibus arcu donec viverra.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Michael Smith, </a> Lorem ipsum dolor sit amet mollis felPede phasellus eget.felis dapibuiverra. </p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Katie Hale, </a> Loreor sit apibus arcu donec viverra. Pede phasellus eget.felis dapibus arcu donec viverra. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ./ End  Blog Right Side-->
            
        </div>
    </div> 
</section> <!-- ./ End Blog Area Wrapper-->	
	
	
<?php 
	include_once("footer.php");
?>