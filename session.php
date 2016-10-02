<?php

/* Fyller if-satsen någon funktion? */
//if (session_id() == "") {
	session_start();
	/* Vad är denna till för */
	//$_SESSION['itemArray'] = array();
	require_once('database.php');
	$db = new Database();
	$_SESSION['db'] = $db;
	
//}
	
	/*
	// Storing Session
	//$login_session = $_SESSION['login_user'];
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
	*/
?>