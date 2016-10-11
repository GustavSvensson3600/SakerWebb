
<?php
	include "password_check.php";
	
	if (isset($_SESSION['login_user'])) {
	
		$username = $_SESSION['login_user'];
		$address = $_SESSION['user_address'];
		$parser = $_SESSION['parser'];
		$message = ""; // Variable To Store message Message
		$password_change = false;
		
		if (isset($_POST['submit'])) {// && $_POST['CSRFToken'] === get_token()) {
			
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$address = $_POST['address'];
			$address = $parser->htmlParse($address);
			
			if (empty($address)) {
				$message = "Address is needed";
			}
			
			elseif (($password_change = !empty($password)) && ($message = password_check($password, $password2))) {
			}
			
			else {
				$db = new Database();
				
				if ($password_change) {
					$hash = password_hash($password, PASSWORD_DEFAULT);
					$db->openConnection();
					$result = $db->updateUser($username, $address, $hash);
					$db->closeConnection();				
				}
				else {
					$db->openConnection();
					$result = $db->updateUser($username, $address);
					$db->closeConnection();			
				}
				
				if ($result) {
					$_SESSION['globalMessage'] = "User has been updated";
					header("location: index.php");
					//$message = "User has been updated";
				}
				else {
					$message = "User could not be updated";
				}
			}
			
		}
	}
	else {
		header("location: index.php");
	}
?>