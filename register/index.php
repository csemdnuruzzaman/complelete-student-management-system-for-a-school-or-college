<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <script src="custom.js"></script>
	<?php 
	
		if(isset($_REQUEST['result'])){
			if($_REQUEST['result']=="success"){
				echo "<script type='text/javascript'>alert('Please Wait until approve your account.');</script>";
			}
		}
	?>
  </head>
  <body>  
  <header class="header-area"> 
	<h2><a href="../">Go Back</a></h2>
  </header>
    <div class="container">
      <header>Signup Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>Name</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contact</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Birth</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="inc/index_core.php" method="post" enctype="multipart/form-data" >
          <div class="page slide-page">
            <div class="title">Basic Info:</div>
            <div class="field">
              <div class="label">Full Name</div>
              <input name="name" required type="text">
            </div>
            <div class="field">
              <div class="label">User Picture</div>
              <input name="img" accept="image/*" required type="file">
            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
              <div class="label">Email Address</div>
              <input name="email" required type="text">
            </div>
            <div class="field">
              <div class="label">Phone Number</div>
              <input name="phone" type="Number">
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Date of Birth:</div>
            <div class="field">
              <div class="label">Date</div>
              <input name="dob" required type="date">
            </div>
            <div class="field">
              <div class="label">Gender</div>
              <select name="gender" required >
                <option Selected >Gender</option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
                <option value="Others" >Other</option>
              </select>
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Login Details:</div>
            <div class="field">
              <div class="label">Username</div>
              <input name="username" required type="text">
            </div>
            <div class="field">
              <div class="label">Password</div>
              <input name="password" required type="password">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit" type="submit" >Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>

  </body>
</html>
