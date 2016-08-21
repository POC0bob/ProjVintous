<?php
class Confirm {
	public static function generate() {
		if (!$_GET['buy']){
		unset($_SESSION['token']);
		return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));	}
	}
	public static function check($token) {
		if(isset($_SESSION['token']) && $token === $_SESSION['token'] && isset($_COOKIE['__uburrito'])){
			unset($_SESSION['token']);
			return true;
		}
		return false;
	}
}
	
	
?>