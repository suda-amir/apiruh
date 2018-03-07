<?php

require_once('config.php');

$id = $_POST['id'];
$date = $_POST['date'];
try{
	$stmt1 = $connection->prepare("SELECT * FROM status_report WHERE status_date = :dater AND emp_id = :id");
	$stmt1->bindParam("id", $id,PDO::PARAM_STR) ;
	$stmt1->bindParam("dater", $date,PDO::PARAM_STR) ;
	$stmt1->execute();
	$data = $stmt1->fetchAll(PDO::FETCH_OBJ);
	$data1 = json_encode($data)
	echo $data1;
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

?>