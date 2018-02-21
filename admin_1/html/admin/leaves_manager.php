<?php

// require_once('config.php');
// session_start();

$cur_date = date('Y-m-d');

$last_date = date("Y-m-t", strtotime($cur_date));
echo $last_date;
if($cur_date == $last_date){
	$stmt = $connection->prepare("SELECT * FROM leaves WHERE 1");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_OBJ);

	foreach ($data as $key) {
		if($key->updated != 1){
			
		}
	}

}

?>