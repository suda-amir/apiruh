<?php
@session_start();
//Sets database connection information
$databaseServer="localhost" ;
$databaseUsername="root" ;
$databasePassword='' ;
$databaseName='apiruh';

	try {
	    $connection = new PDO("mysql:host=$databaseServer;dbname=$databaseName", $databaseUsername, $databasePassword);
	    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
	catch(PDOException $e){
	    echo "Connection failed: " . $e->getMessage();
    }
?>