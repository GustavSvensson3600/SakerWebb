<?php
	require_once('database.inc.php');
	require_once("mysql_connect_data.inc.php");

	$db = new Database($host, $userName, $password, $database);
	$db->openConnection();
	session_start();
	$_SESSION['db'] = $db;


	$db->openConnection();
	if (!$db->isConnected()) {
		header("Location: GetTheFuckOutOfHere.html");
		exit();
	}
	$db->closeConnection();

	//Always do this when you´r done
	$db->closeConnection();
	//Seriously, always.

	header("Location: TakeMeAwayToAWonderfullPlace.php");
?>
