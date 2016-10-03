<?php include("session.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Celebrities Perks Store </title>
	<link rel="stylesheet" href="Css.css">

</head>

<body>
	<div id="header">
		<img class="src" src="D-logo-org-bw.png" /img>
		<?php
		if (!isset($_SESSION['login_user'])) {
			include('login.php'); // Includes Login Script
			include('login_form.php');
		}
		else {
			include('logout.php');
			include('logout_form.html');
		}
		
		?>
	
		<h3 class="center">Celebrities Perks Store</h3>
	</div>
	<?php include('itemlist.php');?>
</body>

</html>
