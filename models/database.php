<?php
	$dsn = 'mysql:host=localhost;dbname=glo2';
	$uname = 'root';
	$pword = '';

	try {
		$db = new PDO($dsn,$uname,$pword);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		include('../errors/database_error.php');
		exit();
	}
?>
