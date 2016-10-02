
<?php
	include "password_check.php";
	
	$message = ""; // Variable To Store message Message
	
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$address = $_POST['address'];
		
		if (empty($username) || empty($password) || empty($password2) || empty($address)) {
			$message = "All fields need input";
		}
		
		elseif ($message = password_check($password, $password2));
		
		else {
			//Ok we accept this
			//åhh vi får kolla på detta
			$db = $_SESSION['db'];
			$db->openConnection();
			if ($db->getUserHash($username) != "") {
				$db->closeConnection();
				$message = "username " . $username . " is already taken";
				return;
			}
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$result = $db->createUser($username, $hash, $address);
			$db->closeConnection();
			
			if ($result) {
				//$message = "User has been created";
				session_regenerate_id();
				$_SESSION['login_user'] = $username;
				header("location: index.php"); 
			}
			else {
				$message = "User could not be created";
			}
		}
		
	}
?>