<?php

	session_start();
	
	$_SESSION = array();
	
	unset($_SESSION['zalogowano']);
	
	session_unset();
	session_destroy();
	
	header("Location: ../index/index.php");
?>