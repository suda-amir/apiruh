<?php

@session_start();
require_once('config.php');

function get_emp_details(){
	global $connection;
	try {
		$stmt = $connection->prepare("SELECT * FROM `employee` WHERE 1");
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_OBJ);
		return ($data);
	} catch (PDOException $e) {
		echo '{"error": {"text":'. $e->getMessage() .'}}';
	}
}
function get_emp_data($id){
	global $connection;
	try {
		$stmt = $connection->prepare("SELECT * FROM `employee` WHERE emp_id = :id");
		$stmt->bindParam("id", $id,PDO::PARAM_STR) ;
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_OBJ);
		return ($data);
	} catch (PDOException $e) {
		echo '{"error": {"text":'. $e->getMessage() .'}}';
	}
}
?>