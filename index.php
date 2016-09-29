<?php include("session.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Celebreties Perks Store </title>
	<link rel="stylesheet" href="Css.css">

</head>

<body>
	<?php
	include('login.php'); // Includes Login Script
	if (!isset($_SESSION['login_user'])) {
		include('login_form.php');
	}
	else {
		include('logout_form.html');
	}
	include('itemlist.php');
	?>
			</div>
		</div>
	</main>
</body>

</html>
