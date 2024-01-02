<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="style.css">
    <script src="custom.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

           <!-- Designed By CodingLab -->

  <body>
  <header class="header-area"> 
	<h2><a href="../">Go Back</a></h2>
  </header>
    <div class="container">
      <form action="inc/index_core.php" method="POST">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input name="email" type="text" placeholder="Enter Your Email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input name="password" type="password" placeholder="Enter Your Password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Continue">
        </div>
      </form>
        <div class="option">or Connect With Social Media</div>
        <div class="twitter">
          <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
        </div>
        <div class="facebook">
          <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
        </div>
    </div>
  </body>
</html>
