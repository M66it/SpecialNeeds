<?php
session_start();
		session_destroy();
		unset($_SESSION['name']);
		unset($_SESSION['level']);
		header("location:signin.php");
?>