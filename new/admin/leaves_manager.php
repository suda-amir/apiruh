<?php

require_once('config.php');
session_start();

$cur_date = date('Y-m-d');

$last_date = date("Y-m-t", strtotime($cur_date));
$first_day = date('d-m-Y', strtotime(date('Y-m-1')));
$stmt = $connection->prepare("SELECT * FROM emp_leaves WHERE 1");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_OBJ);

if($cur_date == $last_date){
	
	foreach ($data as $key) {
		if($key->counter != 1){
			$leaves = $key->paid_leaves;
			$leaves++;
			$counter = 1;
			$stmt1 = $connection->prepare("UPDATE emp_leaves SET paid_leaves = :leaves, counter = :counter WHERE emp_id = :id");
			$stmt1->bindParam("leaves", $leaves,PDO::PARAM_STR) ;
			$stmt1->bindParam("counter", $counter,PDO::PARAM_STR) ;
			$stmt1->bindParam("id", $key->emp_id,PDO::PARAM_STR) ;
			$stmt1->execute();
		}
	}

}elseif($cur_date == $first_day){
	foreach ($data as $key) {
		if($key->counter == 1){
			$counter =1;
			$stmt1 = $connection->prepare("UPDATE emp_leaves SET counter = :counter WHERE emp_id = :id");
			$stmt1->bindParam("counter", $counter,PDO::PARAM_STR) ;
			$stmt1->bindParam("id", $key->emp_id,PDO::PARAM_STR) ;
			$stmt1->execute();
		}
	}
}

?>