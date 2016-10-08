<?php 
	require_once 'dbcon.php'; 
$c_name = filter_input(INPUT_POST, 'Client_Name', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter1');
$c_adress = filter_input(INPUT_POST, 'Client_Adress', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter2');
$c_cname = filter_input(INPUT_POST, 'Client_Contact_Name', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter3');
$c_cphone = filter_input(INPUT_POST, 'Client_Contact_Phone', FILTER_VALIDATE_INT) or die('Postnummer findes ikke');
$zip = filter_input(INPUT_POST, 'Zip_Code_idZip_Code', FILTER_VALIDATE_INT) or die('Missing/illegal parameter5');

$sql = "INSERT INTO `client`(`Client_Name`, `Client_Adress`, `Client_Contact_Name`, `Client_Contact_Phone`, `Zip_Code_idZip_Code`) VALUES (?,?,?,?,?)";
$stmt = $link->prepare($sql);
$stmt->bind_param("sssii", $c_name, $c_adress, $c_cname, $c_cphone, $zip);

if($stmt->execute()){
	echo "Klienten er tilføjet til databasen";
} else {
	echo "Der opstod en fejl";
}

?>

<p><a href="index.php">Gå tilbage</a>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>