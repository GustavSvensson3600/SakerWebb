<?php
	include "session.php";
	include "account_change.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Account </title>
		<link rel="stylesheet" href="Css.css">
	</head>
	<body>
		<div id="header">
		<img class="src" src="D-logo-org-bw.png" /img>

		<h3 class="center">Register</h3>
		</div>
		<div id="body">
		<center><form style="display:inline-block; float:center" method="post">
		<span>Username:</span>
		<div></div>
		<?php echo $username; ?>
		<div></div>

		<span>Address:</span>
		<div></div>
		<input id="address" name="address" type="text" value="<?php echo $address ?>">
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

		<br>
		<span><?php echo $message ?></span>
		</form></center>
		</div>
	</body>
</html>
