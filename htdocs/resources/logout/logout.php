
<?php
    $message = "";
	if (isset($_SESSION['globalMessage'])) {
		$message = $_SESSION['globalMessage'];
		$_SESSION['globalMessage'] = "";
	}
	
	if (isset($_POST['logout'])) {
		session_start();
		if(session_destroy()) {
			header("location: index.php");
		}
	}
	
	if (isset($_POST['change_account'])) {
		header("location: resources/logout/account_change/account_change_form.php");
	}
?>