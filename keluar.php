<?php 

	require 'konek.php';

	session_destroy();
	header('location: login.php');
	exit;

 ?>