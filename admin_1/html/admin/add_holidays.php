<?php

require_once('./config.php');
session_start();

$title = $_POST['title'];
$type = $_POST['type'];
$start_date = $_POST['start'];
$end_date = $_POST['end'];
$reason = $_POST['reason'];
$start = date("Y-m-d", strtotime($start_date));
$end = date("Y-m-d", strtotime($end_date));

try{
	$stmt = $connection->prepare("INSERT INTO `holidays`(`hol_title`, `hol_type`, `hol_desc`, `hol_start`, `hol_end`) VALUES (:title, :type, :reason, :start_date, :end_date)");
	$stmt->bindParam("title", $title,PDO::PARAM_STR) ;
	$stmt->bindParam("start_date", $start,PDO::PARAM_STR) ;
	$stmt->bindParam("end_date", $end,PDO::PARAM_STR) ;
	$stmt->bindParam("reason", $reason,PDO::PARAM_STR) ;
	$stmt->bindParam("type", $type,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

header("location: holidays.php");


?>