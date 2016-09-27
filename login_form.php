		<div id="header">
				<img class="src" src="D-logo-org-bw.png" /img>

			<form style="display:inline-block; float:right" method="post" action="register.php">

				<span>Username:</span>
				<input id="name" name="username" type="text">

				<span>Password:</span>
				<input id="password" name="password" type="password"><br>

				<input name="submit" type="submit" value="Submit">

				<span>Not a member?:</span>
				<input name="reg" type="submit" value="Register">

				<span><?php echo $error; ?></span>
			</form>


			<h3 class="center">ZeroHelp</h3>
		</div>
