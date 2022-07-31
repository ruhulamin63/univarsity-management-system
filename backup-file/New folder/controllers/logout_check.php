<?php

	session_start();
	unset($_SESSION['flag']);
	header('location: ../views/login_check.php');
//	setrawcookie('username', true, time()-1, '/');
//	setrawcookie('password', true, time()-1, '/');
?>