<?php
	include("session.php");
	if(isset($_SESSION['itemArray'])){
		$itemArray = $_SESSION['itemArray'];
	} else {
		$itemArray = array();
	}

	array_push($itemArray, $_POST["buy"]);
	$_SESSION['itemArray'] = $itemArray;
	header("Location: index.php");
 ?>
