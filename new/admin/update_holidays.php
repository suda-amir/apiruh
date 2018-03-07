<?php

require_once('config.php');
session_start();

$id = $_POST['id'];
$title = $_POST['title'];
$type = $_POST['type'];
$start_date = $_POST['start'];
$end_date = $_POST['end'];
$reason = $_POST['reason'];
$start = date("Y-m-d", strtotime($start_date));
$end = date("Y-m-d", strtotime($end_date));

try{
	$stmt = $connection->prepare("UPDATE `holidays` SET `hol_title`=:title, `hol_type`=:type, `hol_desc`=:reason, `hol_start`=:start_date,`hol_end`= :end_date WHERE hol_id = :id");
	
	$stmt->bindParam("title", $title,PDO::PARAM_STR) ;
	$stmt->bindParam("type", $type,PDO::PARAM_STR) ;
	$stmt->bindParam("id", $id,PDO::PARAM_STR) ;
	$stmt->bindParam("start_date", $start,PDO::PARAM_STR) ;
	$stmt->bindParam("end_date", $end,PDO::PARAM_STR) ;
	$stmt->bindParam("reason", $reason,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}
header("location: holidays.php");

?>