<?php

require_once('config.php');
session_start();

$id = $_POST['id'];
$title = $_POST['title'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$half_leave = $_POST['half_leave'];
$leave_type = $_POST['leave_type'];
$reason = $_POST['reason'];
$start = date("Y-m-d", strtotime($start_date));
$end = date("Y-m-d", strtotime($end_date));

try{
	$stmt = $connection->prepare("UPDATE `leaves` SET `title`=:title,`start`=:start_date,`end`=:end_date,`day_type`=:half_leave,`leave_type`=:leave_type,`reason`=:reason WHERE leave_id = :id");

	$stmt->bindParam("id", $id,PDO::PARAM_STR) ;
	$stmt->bindParam("title", $title,PDO::PARAM_STR) ;
	$stmt->bindParam("start_date", $start,PDO::PARAM_STR) ;
	$stmt->bindParam("end_date", $end,PDO::PARAM_STR) ;
	$stmt->bindParam("half_leave", $half_leave,PDO::PARAM_STR) ;
	$stmt->bindParam("leave_type", $leave_type,PDO::PARAM_STR) ;
	$stmt->bindParam("reason", $reason,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

header("location: ");


?>