<?php

try {
	$pdo = new PDO(
        'mysql:host=database_mg;dbname=application_mg;charset=UTF8', 
        'root', 
        'root'
    );

	if ($pdo) {
		echo "Connected to the database_mg database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}