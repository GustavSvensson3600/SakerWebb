
<?php
	$error = "";
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$db->openConnection();
			$hash = $db->getUserHash($username);
			$db->closeConnection();

			if (password_verify($password, $hash)) {
				$_SESSION['login_user'] = $username; // Initializing Session
				header("location: index.php"); // Redirecting To Other Page
			} 
			else {
				$error = "Username or Password is invalid";
			}
		}
	}
?>