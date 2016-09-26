
<?php
	include('createprofile.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Add User</title>
	</head>
	<body>
		<div id="main">
			<h1>Add User example</h1>
			<div id="register">
				<h2>Register</h2>
				<form action="" method="post">
					<label>UserName :</label>
					<input id="name" name="username" placeholder="username" type="text">
					<label>Password :</label>
					<input id="password" name="password" placeholder="password" type="password">
					<label>Address :</label>
					<input id="address" name="address" placeholder="" type="text">
					<input name="submit" type="submit" value=" Register ">
					<span><?php echo $message; ?></span>
				</form>
			</div>
		</div>
	</body>
</html>