<?php include("resources/session.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Celebrities Perks Store </title>
	<link rel="stylesheet" href="resources/css/Css.css">

</head>

<body>
	<div id="header">
		<img class="src" src="resources/img/D-logo-org-bw.png" /img>
		<?php
		if (!isset($_SESSION['login_user'])) {
			include('resources/login/login_form.php');
		}
		else {
			include('resources/logout/logout_form.html');
		}
		
		?>
	
		<h3 class="center">Celebrities Perks Store</h3>
	</div>
	<?php include('resources/checkout/itemlist.php');?>
</body>

</html>
