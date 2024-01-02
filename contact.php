<?php 
	include("header-top.php");
?>

<title>Contact Page</title>

<?php 
	include("header-down.php");
?>

<header class="header_inner contact_page">
    <div class="intro_wrapper">
        <div class="container">  
            <div class="row">        
                 <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Contact Page</h1>
                        <div class="pages_links">
                            <a href="#" title="">Home</a>
                            <a href="#" title="" class="active">Contact Details</a>
                        </div>
                    </div>
                </div>              
            </div>
        </div> 
    </div> 
</header> <!-- End Header -->


<section class="contact_info_wrapper">
     <div class="container">  
        <div class="row">  
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_info">
                    <h3 class="title">Contact Details</h3>
                    <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as nessing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    <div class="event_location_info">                  
                        <ul class="list-unstyled">
                            <li>
                                <h4 class="info_title">Address : </h4>
                                <ul class="list-unstyled">
                                    <li>Satkhira Sadar </li>
                                    <li>Satkhira, Khulna</li>
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Phone Numbers :</h4>
                                <ul class="list-unstyled">
                                    <li>+8801934567890</li>
                                    <li>+8801934567890</li>
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Our E-mails :</h4>
                                <ul class="list-unstyled">
                                    <li>nuruzzamanpolytechnic@gmail.com</li>                                    
                                </ul>
                            </li>                      
                        </ul>
                        <img src="images/banner/map_shape.png" alt="" class="contact__info_shpae">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_form_wrapper">
                    <h3 class="title">Get In Touch</h3>
                    <div class="leave_comment">
                        <div class="contact_form">
                            <form action="inc/mail.php" method="post" >
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                       <input name="name" required type="text" class="form-control" id="name"  placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                        <input name="email" required type="email" class="form-control" id="email" placeholder="Your E-mail">
                                    </div>                                    
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <input name="subject" required type="text" class="form-control" id="subject" placeholder="Pick Your Subject">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <textarea name="message" required class="form-control" id="comment" placeholder="Your Message Write Here ..."></textarea>
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                        <button type="submit" class="text-center">Send Massage</button>
                                    </div>
                                </div>
                            </form>   
                        </div>
                    </div> 
                </div>
           </div>
        </div>
    </div>
</section> <!-- Contact Info Wrappper-->



<section class="contact_map">
    <div class="container-fluid">  
        <div class="row">                  
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mr-auto p-0">
                <h2 class="disabled">Google Map</h2>
                <div class="google_map">
                    <div class="gmap">
                        <div id="map"></div>
                    </div><!-- Ends: .gmap -->                    
                </div>
           </div>
        </div>
    </div>
</section> <!-- Ends: Google Map Area -->  


<?php 
	include("footer.php");
?>