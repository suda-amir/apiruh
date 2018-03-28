<?php
require_once('config.php');

$name = $_POST['name'];
$addr = $_POST['address'];
$poc = $_POST['poc'];
$pocn = $_POST['pocn'];
$gstin = $_POST['gstin'];
$pan = $_POST['pan'];
$target_dir = 'company/'.$name;
if (!file_exists('company/'.$name)) {
    mkdir('company/'.$name, 0777, true);
}
$file_tmp = $_FILES['pic']['tmp_name'];
$file_tmp1 = $_FILES['support_docs']['tmp_name'];
$file_tmp2 = $_FILES['agreement']['tmp_name'];

$file_name = preg_replace('/\s/', '', $_FILES['pic']['name']);
move_uploaded_file($file_tmp, $target_dir.'/'.$file_name);

$file_name1 = preg_replace('/\s/', '', $_FILES['support_docs']['name']);
move_uploaded_file($file_tmp1, $target_dir.'/'.$file_name1);

$file_name2 = preg_replace('/\s/', '', $_FILES['agreement']['name']);
move_uploaded_file($file_tmp2, $target_dir.'/'.$file_name2);

$pic = $target_dir.'/'.$file_name;
$support_docs = $target_dir.'/'.$file_name1;
$agreement = $target_dir.'/'.$file_name2;

try{
	$stmt = $connection->prepare("INSERT INTO `client`(`client_name`, `client_addr`, `client_poc`, `client_poc_no`, `gstin`, `pan_no`, `agreement`, `support_docs`, `pic`) VALUES (:name, :addr, :poc, :pocn, :gstin, :pan, :agreement, :support_docs, :pic)");

	$stmt->bindParam("name", $name,PDO::PARAM_STR) ;
	$stmt->bindParam("addr", $addr,PDO::PARAM_STR) ;
	$stmt->bindParam("poc", $poc,PDO::PARAM_STR) ;
	$stmt->bindParam("pocn", $pocn,PDO::PARAM_STR) ;
	$stmt->bindParam("pan", $pan,PDO::PARAM_STR) ;
	$stmt->bindParam("gstin", $gstin,PDO::PARAM_STR) ;
	$stmt->bindParam("pic", $pic,PDO::PARAM_STR) ;
	$stmt->bindParam("support_docs", $support_docs,PDO::PARAM_STR) ;
	$stmt->bindParam("agreement", $agreement,PDO::PARAM_STR) ;
	$stmt->execute();	
}

catch(PDOException $ae)
{
	echo $ae->getMessage();
}

header("location: company.php" );

?>