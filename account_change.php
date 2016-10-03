
<?php
	include "password_check.php";
	
	if (isset($_SESSION['login_user'])) {
	
		$username = $_SESSION['login_user'];
		$address = $_SESSION['user_address'];
		$message = ""; // Variable To Store message Message
		$password_change = false;
		
		if (isset($_POST['submit'])) {
			
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$address = $_POST['address'];
			
			if (empty($address)) {
				$message = "Address is needed";
			}
			
			elseif (!empty($password)) {
				$password_change = true;
				if ($message = password_check($password, $password2))
					return;
			}
			
			else {
				//Ok we accept this
				//åhh vi får kolla på detta
				$db = $_SESSION['db'];
				
				if ($password_change) {
					$hash = password_hash($password, PASSWORD_DEFAULT);
					$db->openConnection();
					$result = $db->updateUser($username, $address, $hash);
					$db->closeConnection();				
				}
				else {
					$db->openConnection();
					$parser = $_SESSION('parser');
					$address = $parser->htmlParse($address);
					$result = $db->updateUser($username, $address);
					$db->closeConnection();			
				}
				
				if ($result) {
					//$message = "User has been created";
					//header("location: account_change_form.php");
					$message = "User has been updated";
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