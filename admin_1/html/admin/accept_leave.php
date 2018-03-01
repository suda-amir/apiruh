<?php

require_once('config.php');
$id = $_POST['id'];

try{
	$stmt1 = $connection->prepare("SELECT * FROM leaves WHERE leave_id = :id");
	$stmt1->bindParam("id", $id,PDO::PARAM_STR) ;
	$stmt1->execute();
	$data = $stmt1->fetchAll(PDO::FETCH_OBJ);

	foreach ($data as $key) {
		$start = new DateTime($key->start);
		$end = new DateTime($key->end);
		$diff = $end->diff($start)->format("%a");
		$diff++;
		$emp_id = $key->emp_id;
		$type = $key->leave_type;
	}

	$stmt2 = $connection->prepare("SELECT * FROM emp_leaves WHERE emp_id = :id");
	$stmt2->bindParam("id", $emp_id,PDO::PARAM_STR) ;
	$stmt2->execute();
	$data2 = $stmt2->fetchAll(PDO::FETCH_OBJ);

	foreach ($data2 as $key2) {
		if(($key2->paid_leaves - $diff) > 0){
			$days = $key2->paid_leaves - $diff;
			$stmt = $connection->prepare("UPDATE `leaves` SET `status` = 1 WHERE leave_id = :id");
			$stmt->bindParam("id", $id,PDO::PARAM_STR) ;
			$stmt->execute();

			$stmt4 = $connection->prepare("UPDATE `emp_leaves` SET `paid_leaves` = :days WHERE emp_id = :id");
			$stmt4->bindParam("days", $days,PDO::PARAM_STR) ;
			$stmt4->bindParam("id", $emp_id,PDO::PARAM_STR) ;
			$stmt4->execute();			
		}else{
			echo "1";
		}
	}
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

?>