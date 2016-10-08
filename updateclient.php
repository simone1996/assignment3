<?php 
$uclientname = filter_input(INPUT_POST, 'Client_Name') or die('Missing/illegal parameter');
$uclientadr = filter_input(INPUT_POST, 'Client_Adress') or die('Missing/illegal parameter');
$uclientcname = filter_input(INPUT_POST, 'Client_Contact_Name') or die('Missing/illegal parameter');
$uclientcphone = filter_input(INPUT_POST, 'Client_Contact_Phone', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
$uclientzip = filter_input(INPUT_POST, 'Zip_Code_idZip_Code', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
$uclientid = filter_input(INPUT_POST, 'clientid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');

require_once 'dbcon.php';
$sql = "UPDATE client
SET Client_Name =?, Client_Adress =?, Client_Contact_Name=?, Client_Contact_Phone =?, Zip_Code_idZip_Code=?
WHERE idClient =?";
$stmt = $link->prepare($sql);
$stmt->bind_param('sssiii', $uclientname, $uclientadr, $uclientcname, $uclientcphone, $uclientzip, $uclientid);
//$stmt->bind_result($cname);
if($stmt->execute()){
	echo "success";
	header('Location: index.php?updated=true');
	
	}else {
	echo "fail to update";	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>