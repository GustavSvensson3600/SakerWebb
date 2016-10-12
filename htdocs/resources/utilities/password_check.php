<?php
	function password_check($password, $password2) {

		if (strlen($password) < 8 || strlen($password) > 32) {
			return "password need to be between 8 to 32 charather";
		}
		elseif (!preg_match("#[0-9]+#", $password)) {
			return "password need at least one number";
		}
		elseif (!preg_match("#[a-z]+#", $password)) {
			return "password need at least one lower case letter";
		}
		elseif (!preg_match("#[A-Z]+#", $password)) {
			return "password need at least one higher case letter";
		}
		elseif (!preg_match("#[^0-9a-zA-Z]+#", $password)) {
			return "password need at least one special character";
		}
		elseif ($password !== $password2) {
			return "passwords did not match";
		}
		else {
			return "";
		}
	}
?>