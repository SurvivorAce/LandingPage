<?php
	require_once(__DIR__ . "/../model/config.php");

	$query = $_SESSION["connection"]->query("CREATE TABLE users ("
			. "id int(11) NOT NULL AUTO_INCREMENT,"
			. "name varchar(30) NOT NULL,"
			. "email varchar(50) NOT NULL,"
			. "message text NOT NULL," 
			. "PRIMARY KEY (id))");

	
	if($query) {
		echo "<p>Successfully created table: users</p>";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";}
