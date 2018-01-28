<?php

require_once('../config.php');
session_start();

$title = $_POST['title'];
$start_date = $_POST['start'];
$end_date = $_POST['end'];
$reason = $_POST['reason'];
try{
	$stmt = $connection->prepare("INSERT INTO `emp_leaves`(`lead_id`, `name`, `guardian_type`, `numberCode`, `number`, `email`, `relation_other`) VALUES (:id, :gname, :gtype, :numberCode, :gnumber, :gemail, :gt)");
	
	$stmt->bindParam("title", $title,PDO::PARAM_STR) ;
	$stmt->bindParam("start_date", $start_date,PDO::PARAM_STR) ;
	$stmt->bindParam("end_date", $end_date,PDO::PARAM_STR) ;
	$stmt->bindParam("reason", $reason,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

header("location: );


?>