<?php

try {
	$pdo = new PDO(
        'mysql:host=database_rs;dbname=application_rs;charset=UTF8', 
        'root', 
        'root'
    );

	if ($pdo) {
		echo "Connected to the database_rs database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}