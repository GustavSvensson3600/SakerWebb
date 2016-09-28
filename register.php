<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rigster </title>
	<link rel="stylesheet" href="Css.css">

</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2'])) {
			//empty shit
		} else if (strlen($_POST['password']) < 8 ) {
			echo "Password must be 8 or more characters";
		}else if (strcmp ($_POST['password'], $_POST['password2']) == 0 ) {
			//Ok we accept this
			//åhh vi får kolla på detta
			$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$db->openConnection();
			$result = $db->createUser($_POST['username'], $hash, $_POST['adress']);
			$db->closeConnection();
			if($result) {
				header("Location: index.php");
			}
			echo "Unexpected database error";
		}
	}

	include('reg_form.php'); // Includes Login Script
	?>
</body>

</html>
