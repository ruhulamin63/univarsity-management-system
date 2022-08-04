<?php

    session_start();
    unset($_SESSION['flag']);
    header('location: ../views/login_check.php');

//    	setcookie('username', true, time()-1, '/');
//    	setcookie('password', true, time()-1, '/');
//    	setcookie('loginUser', true, time()-1, '/');
?>