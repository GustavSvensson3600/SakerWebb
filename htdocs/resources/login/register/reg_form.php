<?php
	include "../../session.php";
	include "register.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Register </title>
		<link rel="stylesheet" href="../../Css.css">
	</head>
	<body>
		<div id="header">
		<img class="src" src="../../D-logo-org-bw.png" /img>

		<h3 class="center">Register</h3>
		</div>
		<div id="body">
		<center><form style="display:inline-block; float:center" method="post">
		<span>Username:</span>
		<div></div>
		<input id="name" name="username" type="text">
		<div></div>

		<span>Address:</span>
		<div></div>
		<input id="address" name="address" type="text">
		<div></div>

		<span>Password:</span>
		<div></div>
		<input id="password" name="password" type="password"><br>
		<div></div>

		<span>Re-enter Password:</span>
		<div></div>
		<input id="password2" name="password2" type="password"><br>
		<div></div>

		<input name="submit" type="submit" value="Submit">

		<input name="CSRFToken" type="hidden" value="<?php echo get_token(); ?>">
		<br>
		<span><?php echo $message ?></span>
		</form></center>
		</div>
	</body>
</html>
