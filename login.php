
<?php 
	$error = "";
	if (isset($_POST['register']))
		header("location: reg_form.php");
	
	if (isset($_POST['submit']) && $_POST['CSRFToken'] === get_token()) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$db = $_SESSION['db'];
			$db->openConnection();
			$hash = $db->getUserHash($username);
			$db->closeConnection();
			if (password_verify($password, $hash)) {
				session_regenerate_id();
				$parser = $_SESSION['parser'];
				$username = $parser->htmlParse($username);
				$_SESSION['login_user'] = $username; // Initializing Session
				$db->openConnection();
				$_SESSION['user_address'] = $db->getUserAddress($username);
				$db->closeConnection();
				header("location: index.php"); // Redirecting To Other Page
			} 
			else {
				$error = "Username or Password is invalid";
			}
		}
	}
?>