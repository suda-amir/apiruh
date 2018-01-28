<?php

require_once('../config.php');
session_start();


$emp_id = 1;
$title = $_POST['title'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$half_leave = $_POST['half_leave'];
$leave_type = $_POST['leave_type'];
$reason = $_POST['reason'];
try{
	$stmt = $connection->prepare("INSERT INTO `leaves`(`leave_id`, `title`, `start`, `end`, `day_type`, `leave_type`, `reason`) VALUES (:id, :title, :start_date, :end_date, :half_leave, :leave_type, :reason)");

	$stmt->bindParam("id", $emp_id,PDO::PARAM_STR) ;
	$stmt->bindParam("title", $title,PDO::PARAM_STR) ;
	$stmt->bindParam("start_date", $start_date,PDO::PARAM_STR) ;
	$stmt->bindParam("end_date", $end_date,PDO::PARAM_STR) ;
	$stmt->bindParam("half_leave", $half_leave,PDO::PARAM_STR) ;
	$stmt->bindParam("emp_id", $emp_id,PDO::PARAM_STR) ;
	$stmt->bindParam("leave_type", $leave_type,PDO::PARAM_STR) ;
	$stmt->bindParam("reason", $reason,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

header("location: );


?>