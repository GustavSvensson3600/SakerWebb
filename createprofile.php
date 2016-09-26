
<?php
	session_start(); // Starting Session
	$message = ''; // Variable To Store message Message
	$anyerror = false;
	
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		
		foreach ($_POST as $name => $value){
			if (empty($value)){
				$message .= $name . " is required" . "<br>";
				$anyerror = true;
			}	
		}
		if (count(/*get_user($username)*/array()) != 0) {
			$message .= $username . "is already used" . "<br>";
		}
		
		if (strlen($password) < 8) {
			$message .= "password need to be at least 8 character long";
		}
		elseif (!preg_match("#[0-9]+#", $password)) {
			$message .= "password need at least one number";
		}
		elseif (!preg_match("#[a-z]+#", $password)) {
			$message .= "password need at least one lower case letter";
		}
		elseif (!preg_match("#[A-Z]+#", $password)) {
			$message .= "password need at least one higher case letter";
		}
		elseif (!preg_match("#[^0-9a-zA-Z]+#", $password)) {
			$message .= "password need at least one special character";
		}
		else {
					/*	$mysqli = new mysqli("localhost", "user", "password", "database");
			if ($mysqli->connect_errno) {
				echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			*/
			if (add_user($username, $password, $address, "placeholder")) {
				// Initializing Session
				$message = "User has been created";
				//header("location: index.php"); // Redirecting To Other Page
			}
			else {
				$message = "User could not be created";// $mysqli->error;
			}
		//	mysqli->close(); // Closing Connection
		}
		
		//if ($anyerror){return;}
	}
	
	function add_user($username, $password, $address, $mysqli){
	/*	$hash = password_hash($password, PASSWORD_DEFAULT);
		$stmt = $mysqli->prepare("INSERT INTO login (username, password, address) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $username, $hash, $address);
		if ($stmt->execute()){
			echo $username . " has been added";
			$stmt->close();
			return true;
		}
		else{
			echo "Error : " . $stmt->error();
			$stmt->close();
			return false;
		}
		*/
		return "placeholder";
	}
	
?>