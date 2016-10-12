<?php 
	function get_token() {
		if (isset($_SESSION['token'])) {
			return $_SESSION['token'];
		}
		else {
			$token = bin2hex(random_bytes(32));
			$_SESSION['token'] = $token;
			return $token;
		}
	}
?>