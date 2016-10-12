
<?php
	include "../../utilities/password_check.php";
	
	$message = ""; 
	
	if (isset($_POST['submit']) && $_POST['CSRFToken'] === get_token()) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$address = $_POST['address'];
		$parser = $_SESSION['parser'];
		
		if (empty($username) || empty($password) || empty($password2) || empty($address)) {
			$message = "All fields need input";
		}
		
		elseif ($message = password_check($password, $password2));
		
		else {
			$db = $_SESSION['db'];
			$db->openConnection();
			if ($db->getUserHash($username) != "") {
				$db->closeConnection();
				$message = "username " . $username . " is already taken";
				return;
			}
			$hash = password_hash($password, PASSWORD_DEFAULT);
			//$username = $parser->htmlParse($username);
			$address = $parser->htmlParse($address);
			$result = $db->createUser($username, $hash, $address);
			$db->closeConnection();
			
			if ($result) {
				session_regenerate_id();
				$_SESSION['login_user'] = $username;
				header("location: ../../../index.php"); 
			}
			else {
				$message = "User could not be created";
			}
		}
		
	}
?>