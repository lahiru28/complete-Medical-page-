
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>


		<div >
			<label>Gender: &nbsp &nbsp  </label>
			Male &nbsp <input type="radio" name="gender" value="<?php echo $male; ?>">
			&nbsp &nbsp Female &nbsp <input type="radio" name="gender" value="<?php echo $female; ?>">
		</div>


		<div class="input-group">
			<label>Age</label>
			<input type="text" name="age" value="<?php echo $age; ?>">
		</div>


		<div class="input-group">
			<label>Contact Number</label>
			<input type="text" name="contactNo" value="<?php echo $contactNo; ?>">
		</div>



		<div class="input-group">
			<label>Address</label>
			<input type="text" name="add1" value="<?php echo $add1; ?>"> <br> <br>
			<input type="text" name="add2" value="<?php echo $add2; ?>"> <br> <br>
			<input type="text" name="add3" value="<?php echo $add3; ?>"> <br> <br>
		</div>







		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Log in</a>
		</p>
	</form>
</body>
</html>