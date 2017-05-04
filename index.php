<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header><a href="#">App Name</a></header>
	<a href="login.php" id='login_btn'>Log in</a>
	<a href="register.php" id='signup_btn'>Sign up</a>
	<a href="logout.php" id='logout_btn'>Log out</a>
</body>
</html>

<?php
include 'db.php';
session_start();
if(isset($_SESSION['user'])) {		//logged in
	?>
	<script>
		document.querySelector('#login_btn').style.display = 'none';
		document.querySelector('#signup_btn').style.display = 'none';		
		document.querySelector('#logout_btn').style.display = 'inline-block';		
	</script>
	<?php echo '<p>' . $_SESSION['user'] . '</p>';
}
else {		//logged out
	?>
	<script>
		document.querySelector('#login_btn').style.display = 'inline-block';
		document.querySelector('#signup_btn').style.display = 'inline-block';		
		document.querySelector('#logout_btn').style.display = 'none';
	</script>
	<?php
}