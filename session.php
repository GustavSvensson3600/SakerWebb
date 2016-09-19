<?php
	
	//File should set user-specific information
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	// Mysql php code
/*	$mysqli = new mysqli("localhost", "user", "password", "database");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	*/
	
	session_start();// Starting Session
	// Storing Session
	$login_session = $_SESSION['login_user'];
	$_SESSION['user_address'] = "placeholder";
//	set_user($login_session, $mysqli);
	if(!isset($_SESSION['user_address'])){
	//	mysqli->close(); // Closing Connection
		$_SESSION['login_user'] = NULL;
		header('Location: index.php'); // Redirecting To Home Page
	}
	
	function set_user($username, $mysqli){
		$stmt = $mysqli->prepare("SELECT address FROM login WHERE username=?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->bind_result($_SESSION['user_address']);
		$stmt->fetch();
		$stmt->close();
	}
?>