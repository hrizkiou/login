<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<div class="container">
		<div class="login" id="login">
		<form id="login">
			<h1>Login</h1>
			<label>Username</label>
			<input type="text" name="username" />
			<label>Password</label>
			<input type="password" name="password" />
			<br>
			<div onclick="login()" class="btn">Log In</div>
			<h4 class="regbutton" id="regbutton">Forgot Password!</h1>
		</form>
		</div>
		<!-- <div class="register" id="register" style="display:none">
		<form action="#" method="POST">
			<h1>Register</h1>
			<label>Full Name</label>
			<input type="text" name="full_name" />
			<label>Email</label>
			<input type="email" name="Email" />
			<label>Username</label>
			<input type="text" name="username" />
			<label>Password</label>
			<input type="password" name="password" />
			<br>
			<div class="btn">Register</div>
		</form>
		</div>
		<div class="forgot" id="forgot" style="display:none">
		<form action="#" method="POST">
			<h1>Reset</h1>
			<label>Email</label>
			<input type="email" name="Email" />
			<br>
			<div class="btn">Reset</div>
			<h4 class="logbutton" id="logbutton">Login</h1>
		</form>
		</div> -->
	</div>
	<script src="js/script.js"></script>
</body>
</html>