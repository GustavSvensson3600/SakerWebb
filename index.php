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
	if(!isset($_SESSION['login_user'])) { ?>
	<div id="header">


		<form style="display:inline-block; float:right" method="post">

			<span>Username:</span>
			<input id="name" name="username" type="text">
			<span>Password:</span>

			<input id="password" name="password" type="password"><br>
			<input type="submit" value="Submit">
		</form>
		<h3 class="center">ZeroHelp</h3>
	</div>
	<?php } else { ?>
			<img class="src" src="D-logo-org-bw.png" /img>
			<div class="cart">
				<a href=""><img src="cart.png"/></a>
			</div>
	<?php } ?>

		<main>
			<div id="content">
				<div class="innertube">
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
