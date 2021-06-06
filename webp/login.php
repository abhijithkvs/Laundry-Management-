<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>LAUNDRY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
  background-image: url('laundry1.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
img{
    opacity: 1;
}
</style>
</head>
<body>
    <h5>.</h5>
<br><br><br>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>