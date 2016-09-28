<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Stuff 'N Things </title>
	<link rel="stylesheet" href="Css.css">

</head>

<body>
	<?php
	require_once('database.php');
	session_start();
	$db = new Database();
	$_SESSION['db'] = $db;
	include('login.php'); // Includes Login Script
	if (!isset($_SESSION['login_user'])) {
		include('login_form.php');
	}
	else {
		include('logout_form.html');
	}
	?>
			</div>
		</div>
	</main>
</body>

</html>
