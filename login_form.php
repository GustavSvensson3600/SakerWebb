
			<form style="display:inline-block; float:right" method="post">

				<span>Username:</span>
				<input id="name" name="username" type="text">

				<span>Password:</span>
				<input id="password" name="password" type="password"><br>

				<input name="submit" type="submit" value="Submit">

				<span>Not a member?:</span>
				
				<input name="register" type ="submit" value="Register" />
				
				<br>
				<span><?php echo $error ?></span>
				
			</form>