
<?php
	session_start(); // Starting Session
	$error = ''; // Variable To Store Error Message
	$anyerror = false;
	
	if (isset($_POST['submit'])) {
		
		foreach ($_POST as $name => $value){
			$error .= "<br>";
			if (empty($value)){
				$error .= $name . " is required" . "<br>";
				$anyerror = true;
			}	
		}
		if ($anyerror){return;}
		// Define $username and $password
		$username = $_POST['username'];
		$password = $_POST['password'];
		$address = $_POST['address'];
	/*	$mysqli = new mysqli("localhost", "user", "password", "database");
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		*/
		if (add_user($username, $password, $address, "placeholder")) {
			$_SESSION['login_user'] = $username; // Initializing Session
			header("location: profile.php"); // Redirecting To Other Page
		} 
	//	mysqli->close(); // Closing Connection
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