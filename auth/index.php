<?php
	
?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="../js/auth.js"></script>
		<title>nlist | Login</title>
	</head>
	<body class="auth-body">
		<div class="welcome-box">
			<div class="info">
				<center>
					<h1>nlist</h1>
				</center>
				<br>
				<p>
					nlist is the experimental economics recruiting platform that helps academics organize and execute their experiments.
					<br><br>
					<ul>
						<li>asdfasdf asdfadsfa</li>
						<li>dsfadaf sdfasd f</li>
						<li>adsfa f ads </li>
						<li>dsfadaf sdfasd f</li>
						<li>adsfa f ads </li>
					</ul>
				</p>
			</div>
			<div class="register-box"><br>
				<h3>Sign Up</h3><br>
				<form class="register-form" method="POST" action="register.php">
					<input type="text" name="full_name" placeholder="Full Name"><br><br>
					<input type="text" name="email" placeholder="Email"><br><br>
					<input type="password" name="password" placeholder="Password"><br><br>
					<input type="password" name="confirm_password" placeholder="Confirm Password"><br><br><br><br>
					<input type="submit" value="Register" data-flag="register">
					<div class="existing-account">
						Already have an account? <a href="#" class="login-link">Log In</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>