<?php
	session_start();
	$un=$SESSION['un'];
	session_destroy();
	header('Location:homepage.php');
?>