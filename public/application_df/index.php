<?php

try {
	$pdo = new PDO(
        'mysql:host=database_df;dbname=application_df;charset=UTF8', 
        'root', 
        'root'
    );

	if ($pdo) {
		echo "Connected to the database_df database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}