<?php
	require_once(__DIR__ . "/database.php");
	session_start();
	session_regenerate_id(true);

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "landingpage";

	if(!isset($_SESSION["connection"])) {
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}
?>