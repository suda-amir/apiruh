<?php

require_once('config.php');

//$company_id = $_POST['company_id'];
$company_id = "10";
// $employee_id = $_POST['employee_id'];
$employee_id = "EMP01011972001";
$date = $_POST['date'];
$date_final = date("Y-m-d", strtotime($date));
$in_time = $_POST['in_time'];
$out_time = $_POST['out_time'];
$hourdiff = round((strtotime($out_time) - strtotime($in_time))/3600, 1); 
$status = $_POST['status'];
$nature_of_work = $_POST['nature_of_work'];
$billed = $_POST['billed'];
$subject = $_POST['subject'];
$work_details = $_POST['work_details'];
$remarks = $_POST['remarks'];
$expenses = $_POST['expenses'];
$comments = $_POST['comments'];

try{
	$stmt = $connection->prepare("INSERT INTO `status_report`(`client_id`, `emp_id`, `status_date`, `start_time`, `end_time`, `work_hrs`, `work_status`, `nat_work`, `work_subject`, `billed`, `add_comments`, `work_details`, `remarks`, `remb`) VALUES (:company_id, :employee_id, :dater, :in_time, :out_time, :hourdiff, :status, :nature_of_work, :subject, :billed, :comments, :work_details, :remarks, :expenses)");

	$stmt->bindParam("company_id", $company_id,PDO::PARAM_STR) ;
	$stmt->bindParam("employee_id", $employee_id,PDO::PARAM_STR) ;
	$stmt->bindParam("dater", $date_final,PDO::PARAM_STR) ;
	$stmt->bindParam("in_time", $in_time,PDO::PARAM_STR) ;
	$stmt->bindParam("out_time", $out_time,PDO::PARAM_STR) ;
	$stmt->bindParam("hourdiff", $hourdiff,PDO::PARAM_STR) ;
	$stmt->bindParam("status", $status,PDO::PARAM_STR) ;
	$stmt->bindParam("nature_of_work", $nature_of_work,PDO::PARAM_STR) ;
	$stmt->bindParam("billed", $billed,PDO::PARAM_STR) ;
	$stmt->bindParam("subject", $subject,PDO::PARAM_STR) ;
	$stmt->bindParam("work_details", $work_details,PDO::PARAM_STR) ;
	$stmt->bindParam("remarks", $remarks,PDO::PARAM_STR) ;
	$stmt->bindParam("expenses", $expenses,PDO::PARAM_STR) ;
	$stmt->bindParam("comments", $comments,PDO::PARAM_STR) ;
	$stmt->execute();
	$count=$stmt->rowCount();
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

 header("location: status_report.php");


?>