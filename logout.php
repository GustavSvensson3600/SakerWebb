
<?php
	if (isset($_POST['logout'])) {
		session_start();
		// Destroying All Sessions
		if(session_destroy()) {
			header("location: index.php"); // Redirecting To Home Page
		}
	}
	
	if (isset($_POST['change_account'])) {
		header("location: account_change_form.php");
	}
?>