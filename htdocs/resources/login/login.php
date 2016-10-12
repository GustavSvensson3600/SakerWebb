
<?php 
	$error = "";
	if (isset($_POST['register']))
		header("location: resources/login/register/reg_form.php");
		
	if (isset($_POST['submit']) && $_POST['CSRFToken'] === get_token()) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$db = new Database();
			
			$db->openConnection();
			if ($db->getUserStatus($username) > 3) {
				$db->closeConnection();
				$error = "Your account is locked";
			}
			else {
				$hash = $db->getUserHash($username);
				if (password_verify($password, $hash)) {
					session_regenerate_id();
					$_SESSION['login_user'] = $username;
					$_SESSION['user_address'] = $db->getUserAddress($username);
					$db->resetStatus($username);
					$db->closeConnection();
					header("location: index.php"); 
				} 
				else {
					$db->incrementStatus($username);
					$db->closeConnection();
					$error = "Username or Password is invalid";
				}
			}
		}
	}
?>