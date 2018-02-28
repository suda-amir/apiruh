<?php

require_once('./config.php');
session_start();

$id = $_POST['id'];

try{
	$stmt = $connection->prepare("DELETE FROM `holidays` WHERE hol_id = :id");
	$stmt->bindParam("id", $id,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

?>