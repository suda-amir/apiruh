<?php

require_once('config.php');
require_once('functions.php');

$start_date = date('Y-m-d', strtotime(date('Y-m-1')));
$today = date('Y-m-d');
$end_date = date("Y-m-t", strtotime($today));
$emp_id = "EMP01011972001";
$response = array();
$i = 0;
$j = 0;
try{
	$stmt = $connection->prepare("SELECT * FROM `status_report` WHERE emp_id = :id AND (status_date >= :start_date AND status_date <= :end_date) ");
	$stmt->bindParam("id", $emp_id,PDO::PARAM_STR) ;
	$stmt->bindParam("start_date", $start_date,PDO::PARAM_STR) ;
	$stmt->bindParam("end_date", $end_date,PDO::PARAM_STR) ;
	$stmt->execute();	
	$data = $stmt->fetchAll(PDO::FETCH_OBJ);
	foreach ($data as $key) {
		if($key->work_hrs > 8 ){
			$response[$i]['title'] = "Completed";
			$response[$i]['start'] = $key->status_date;	
			$response[$i]['color'] = "#2eec19";
		}else{
			$response[$i]['title'] = "Remaining";
			$response[$i]['start'] = $key->status_date;
			$response[$i]['color'] = "#f77c7c";
		}
		$i = $i + 1;
	}
	$final = array_map("unserialize", array_unique(array_map("serialize", $response)));
	for ($k=0; $k < sizeof($response); $k++) {
		if(empty($final[$k])){
			continue;
		}else{
			$display[$j] = $final[$k];
			$j = $j + 1;	
		} 
		
	}
	echo json_encode($display);
	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}




?>