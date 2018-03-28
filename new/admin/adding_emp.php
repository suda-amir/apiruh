<?php

require_once('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
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
$qualifications = implode(",", $_POST['qualifications']);

if (!file_exists('employee/'.$name)) {
    mkdir('employee/'.$name, 0777, true);
}

$target_dir = 'employee/'.$name;

$file_tmp = $_FILES['pic']['tmp_name'];
$file_tmp1 = $_FILES['qual_docs']['tmp_name'];
$file_tmp2 = $_FILES['offer_letter']['tmp_name'];
$file_tmp3 = $_FILES['service_aggr']['tmp_name'];

$file_name = preg_replace('/\s/', '', $_FILES['pic']['name']);
move_uploaded_file($file_tmp, $target_dir.'/'.$file_name);

$file_name1 = preg_replace('/\s/', '', $_FILES['qual_docs']['name']);
move_uploaded_file($file_tmp1, $target_dir.'/'.$file_name1);

if($noe == "Employee"){
	$file_name2 = preg_replace('/\s/', '', $_FILES['offer_letter']['name']);
	move_uploaded_file($file_tmp2, $target_dir.'/'.$file_name2);
	$service_aggr = "";
}else{
	$file_name3 = preg_replace('/\s/', '', $_FILES['service_aggr']['name']);
	move_uploaded_file($file_tmp3, $target_dir.'/'.$file_name3);
	$offer = "";
}

$pic = $target_dir.'/'.$file_name;
$qual_docs = $target_dir.'/'.$file_name1;
$offer = $target_dir.'/'.$file_name2;
$service_aggr = $target_dir.'/'.$file_name3;


$stmt1 = $connection->prepare("SELECT * FROM employee WHERE 1");
$stmt1->execute();
$data = $stmt1->fetchAll(PDO::FETCH_OBJ);
foreach ($data as $key) {
	$id = $key->id;
}
$id++;
$newDate = date("dmY", strtotime($doj));
if($noe == "Employee"){
	$emp_id ="EMP".$newDate."$id";	
}else{
	$emp_id ="CONT".$newDate."$id";
}
var_dump($emp_id);
try{
	$stmt = $connection->prepare("INSERT INTO `employee`(`emp_id`, `name`, `nat_emp`, `personal_no`, `email`, `dob`, `doj`, `design`, `pan_no`, `aadhar_no`, `perm_addr`, `contct_det`, `emr_cntct_per`, `emr_cntct_no`, `blood_grp`, `qualifications`, `supprt_docs`, `serv_agr`, `offr_letter`, `emp_pic`) VALUES (:id, :name, :noe, :contact, :email, :dob, :doj, :designation, :pan, :aadhar, :addr, :contact, :ecp, :ecm, :blood, :qualifications, :qual_docs, :service_aggr, :offer, :pic)");

	$stmt->bindParam("id", $emp_id,PDO::PARAM_STR) ;
	$stmt->bindParam("name", $name,PDO::PARAM_STR) ;
	$stmt->bindParam("noe", $noe,PDO::PARAM_STR) ;
	$stmt->bindParam("dob", $dob,PDO::PARAM_STR) ;
	$stmt->bindParam("doj", $doj,PDO::PARAM_STR) ;
	$stmt->bindParam("email", $email,PDO::PARAM_STR) ;
	$stmt->bindParam("designation", $designation,PDO::PARAM_STR) ;
	$stmt->bindParam("contact", $contact,PDO::PARAM_STR) ;
	$stmt->bindParam("addr", $addr,PDO::PARAM_STR) ;
	$stmt->bindParam("pan", $pan,PDO::PARAM_STR) ;
	$stmt->bindParam("aadhar", $aadhar,PDO::PARAM_STR) ;
	$stmt->bindParam("ecp", $ecp,PDO::PARAM_STR) ;
	$stmt->bindParam("ecm", $ecm,PDO::PARAM_STR) ;
	$stmt->bindParam("blood", $blood,PDO::PARAM_STR) ;
	$stmt->bindParam("qualifications", $qualifications,PDO::PARAM_STR) ;
	$stmt->bindParam("qual_docs", $qual_docs,PDO::PARAM_STR) ;
	$stmt->bindParam("offer", $offer,PDO::PARAM_STR) ;
	$stmt->bindParam("service_aggr", $service_aggr,PDO::PARAM_STR) ;
	$stmt->bindParam("pic", $pic,PDO::PARAM_STR) ;
	$stmt->execute();	
}
catch(PDOException $ae)
{
	echo $ae->getMessage();
}

//header("location: ");


?>