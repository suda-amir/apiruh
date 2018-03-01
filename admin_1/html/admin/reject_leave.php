<?php

require_once('config.php');
session_start();

$id = $_POST['id'];

try{
	$stmt = $connection->prepare("UPDATE `leaves` SET `status` = 2 WHERE leave_id = :id");
	$stmt->bindParam("id", $id,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

?>