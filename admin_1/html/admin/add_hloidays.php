<?php

require_once('./config.php');
session_start();

$title = $_POST['title'];
$start_date = $_POST['start'];
$end_date = $_POST['end'];
$reason = $_POST['reason'];
try{
	$stmt = $connection->prepare("INSERT INTO `holidays`(`hol_type`, `hol_date`, `hol_desc`, `hol_start`, `hol_end`) VALUES (:title,:start_date,:end_date,[value-4],[value-5])");
	
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