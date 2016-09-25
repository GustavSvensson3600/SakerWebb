
<?php
	session_start(); // Starting Session
	$error = ''; // Variable To Store Error Message
	//Testarray
	$logins = array (
		array('username' => 'Sarah', 'password' => '$2y$10$Jr1kd5a2Yo69V4RznPCimeY4SK/RPokNNDro5CeNPfgvNB1ZG2k.m', 'address' => '95 Summit Street'),
		array('username' => 'Penny', 'password' => '$2y$10$6gVeFMlaBzOkjr2w6oDOMO/llv1EzuTceTvtx9unsjq4TrsyQUcDi', 'address' => '9828 Walnut Street'),
		array('username' => 'Michael', 'password' => '$2y$10$FulbTBgH.VPbPsA4BPJkl..WKaONnqSmDbfqrRh80WNlmfRnQwP9G', 'address' => '37 SW. Chapel Circle'),
		array('username' => 'Jennifer', 'password' => '$2y$10$KQB5S6tvHRMpWyoQbZV/cOoJPhJpVdPYNzwHn/4PsMybaUsaswVjy', 'address' => '7440 Young Lane'),
		array('username' => 'Algot', 'password' => '$2y$10$VztHaXfus03ofJsQSyeq8.b5/D6nOwJGnSQHEoFhJvp1ebSEURRMi', 'address' => '29 Ivy Avenue')
	);
	
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else {
			// Define $username and $password
			$username = $_POST['username'];
			$password = $_POST['password'];
			// Mysql php code
		/*	$mysqli = new mysqli("localhost", "user", "password", "database");
			if ($mysqli->connect_errno) {
				echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			$hash = get_user_hash($username, $mysqli);
			*/
			$hash = get_user($username)['password'];
			// Ok?
			if (password_verify($password, $hash)) {
				$_SESSION['login_user'] = $username; // Initializing Session
				header("location: index.php"); // Redirecting To Other Page
			} 
			else {
				$error = "Username or Password is invalid";
			}
		//	mysqli->close(); // Closing Connection
		}
	}
	
	//Testfunction
	function get_profile($username, $password){
		global $logins;
		$result = array();
		foreach ($logins as $profile) {
			if ($profile['username'] === $username && $profile['password'] === $password)
				array_push($result, $profile);
		}
		return $result;
	}
	//Testfunction
	function get_user($username){
		global $logins;
		foreach ($logins as $profile) {
			if ($profile['username'] === $username)
				return $profile;
		}
	}
	
	function get_user_hash($username, $mysqli){
		$hash = "";
		$stmt = $mysqli->prepare("SELECT password FROM login WHERE username=?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		if ($stmt->num_rows() == 1) {
			$stmt->bind_result($hash);
			$stmt->fetch();
		}
		$stmt->close();
		return $hash;
	}
	
?>