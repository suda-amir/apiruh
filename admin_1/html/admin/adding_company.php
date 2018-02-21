<?php

require_once('../config.php');
session_start();


$name = $_POST['name'];
$dob = $_POST['dob'];
$doj = $_POST['doj'];
$noe = $_POST['noe'];
$designation = $_POST['designation'];
$contact = $_POST['contact'];
$addr = $_POST['addr'];
$pan = $_POST['pan'];
$aadhar = $_POST['aadhar'];
$ecp = $_POST['ecp'];
$ecm = $_POST['ecm'];
$blood = $_POST['blood'];
$qualifications = $_POST['qualifications'];
$qual_docs = $_POST['qual_docs'];
$target_dir = "uploads/";
$offer = $target_dir . basename($_FILES["offer_letter"]["name"]);
$service_aggr = $target_dir . basename($_FILES["service_aggr"]["name"]);
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