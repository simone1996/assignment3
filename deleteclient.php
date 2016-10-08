<?php 

$cid = filter_input(INPUT_POST, 'delclientlist', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');

require_once 'dbcon.php';
$sql = 'DELETE FROM `client`
WHERE idClient = ?;';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $cid);

if($stmt->execute()){
	echo "Slettet";
header('Location: index.php?deleted=true');
	}else {
		echo "Virkede ikke";
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