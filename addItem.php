<?php
	include("session.php");
	$itemArray = $_SESSION['itemArray'];
	array_push($itemArray, $_POST["name"]);
	$_SESSION['itemArray'] = $itemArray;
	header("Location: index.php");
 ?>
