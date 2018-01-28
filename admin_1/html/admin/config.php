<?php
@session_start();
//Sets database connection information
$databaseServer="localhost" ;
$databaseUsername="root@localhost" ;
$databasePassword='' ;
$databaseName='apiruh';

			try {
			    $connection = new PDO("mysql:host=$databaseServer;dbname=$databaseName", $databaseUsername, $databasePassword);
			    // set the PDO error mode to exception
			    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    //echo "Connected successfully";
			    

		    }
			catch(PDOException $e)
			    {
			    echo "Connection failed: " . $e->getMessage();
			    }
?>