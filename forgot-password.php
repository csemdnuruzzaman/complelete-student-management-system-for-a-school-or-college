<?php 
include("header-top.php");
?>
<title>Forget Passowrd</title>
<?php 
include("header-down.php");
?>

<!-- forgot pass section -->
<section class="forgot_pass">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-7 col-sm-7 col-md-7 col-lg-7 mx-auto">
				<div class="forgot_wrapper">
					<h6>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</h6>	
					<form method="post">
						<div class="form-group"> 
						  	<input autocomplete="off" class="required form-control" placeholder="Username or email" name="name" type="text">
						</div>
						<div class="form-group register-btn">
						 	<button type="submit" class="btn btn-primary reset_pass_btn" value="Reset Password">Reset Password</button>
						</div>	
					</form>
				</div>
			</div>												
		</div>
	</div>
</section>
<!-- ./ End section -->



<?php 
include("footer.php");
?>