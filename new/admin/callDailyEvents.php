<?php

require_once('config.php');
require_once('functions.php');

$id = $_POST['id'];
$date = $_POST['date'];
$hrs_left = 0;
$total_hrs = 0;
$num = 1;
try{
	$stmt1 = $connection->prepare("SELECT * FROM status_report WHERE status_date = :dater AND emp_id = :id");
	$stmt1->bindParam("id", $id,PDO::PARAM_STR) ;
	$stmt1->bindParam("dater", $date,PDO::PARAM_STR) ;
	$stmt1->execute();
	$data = $stmt1->fetchAll(PDO::FETCH_OBJ);
	foreach ($data as $key) {
		$hrs_left = $hrs_left + $key->work_hrs;
		$total_hrs = $hrs_left;
	}
	if($hrs_left < 8){
		$hrs_left = 8 - $key->work_hrs;
		$disp = '<div class="alert alert-pink alert-dismissable fade show alert-bordered has-icon"><i class="la la-info-circle alert-icon"></i>
               <strong>Ooops!</strong><br>You havent worked for 8 hrs</div>';
	}elseif($hrs_left == 8){
		$hrs_left = 0;
		$disp = '<div class="alert alert-primary alert-dismissable fade show alert-bordered has-icon"><i class="la la-check alert-icon"></i>
               <strong>Well done!</strong><br>You successfully completed 8 hrs of work.</div>';
	}else{
		$hrs_left = 0;
		$disp = '<div class="alert alert-primary alert-dismissable fade show alert-bordered has-icon"><i class="la la-check alert-icon"></i>
                                   <strong>Well done!</strong><br>You successfully completed more than 8 hrs of work.</div>';
	}
	$disp = $disp . '<table class="table table-condensed">
        	   	        <thead>
                            <tr>
                                <th width="40%">Task</th>
                                <th width="30%" align="center">Project</th>
                                <th width="10%">Status</th>
                                <th width="10%" align="center">Hours</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                    <tbody>';

    foreach ($data as $key1) {
    	
    	$comp_name = get_comp_data($key1->client_id);
    	$table_row = "";
		foreach ($comp_name as $name) {
			$company = $name->client_name;
		}
    	$table_row = '<tr>
                        <td>'.$num.'</td>
                        <td>'.$company.'</td>';
        if($key1->work_status == "Completed"){
        	$table_row = $table_row . '<td><i class="ti-check text-success"></i></td>';
        }elseif ($key1->work_status == "Ongoing") {
        	$table_row = $table_row . '<td><i class="ti-info-alt text-info"></i></td>';
        }elseif ($key1->work_status == "Scheduled") {
        	$table_row = $table_row . '<td><i class="ti-time text-warning"></i></td>';
        }
        $table_row = $table_row . '<td>'.$key1->work_hrs.'</td>';
        $table_row = $table_row . '<td><button class="btn btn-outline-info btn-icon-only btn-circle btn-sm btn-thick" data-toggle="modal" data-target="#edit-event-modal'.$key1->status_id.'" ><i class="la la-binoculars" ></i></button></td>
                    </tr>';
		$disp = $disp . $table_row;   
		$num = $num + 1;                     
    }
    $disp = $disp . '<tr>
                        <td colspan="3"><h3><b>Total</b></h3></td>                    
                        <td colspan="2"><h3><b>'.$total_hrs.'</b> hrs</h3></td>
                    </tr>
                    </tbody>
                    </table>';                        
    
	echo $disp;
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

?>
