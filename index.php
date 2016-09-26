<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Stuff 'N Things </title>
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
	?>
			</div>
		</div>


		<nav id="nav">
			<div class="innertube">

				<li><a href="#">Sälj biljeter</a></li>
				<li><a href="#">Lägg till Sittningar</a></li>
				<li><a href="#">Lägg till Events</a></li>

				<li><a href="#">Listor</a></li>
				<li><a href="#">Matpreferencer</a></li>
				<li><a href="#">Link 3</a></li>


				<li><a href="#">Sittningar</a></li>
				<li><a href="#">Sittandes</a></li>
				<li><a href="#">Andra event</a></li>
			</div>
		</nav>
	</main>
</body>

</html>
