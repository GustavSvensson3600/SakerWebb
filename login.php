
<?php 
	$error = "";
	if (isset($_POST['register']))
		header("location: reg_form.php");
	
	if (isset($_POST['submit'])) {
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
			//$hash = '$2y$10$Jr1kd5a2Yo69V4RznPCimeY4SK/RPokNNDro5CeNPfgvNB1ZG2k.m';

			if (password_verify($password, $hash)) {
				session_regenerate_id();
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