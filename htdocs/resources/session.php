<?php

include "utilities/csrf.php";

	session_start();
	require_once('utilities/parser.php');
	require_once('database/database.php');
	$db = new Database();
	$parser = new Parser();
	$_SESSION['db'] = $db;
	$_SESSION['parser'] = $parser;
	
?>