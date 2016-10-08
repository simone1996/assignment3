<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Clientdetaljer</title>
</head>
<body>

<?php
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');

require_once 'dbcon.php';
$sql = 'SELECT Client_Name, Client_Adress, Client_Contact_Name, Client_Contact_Phone
FROM client 
WHERE IdClient = ?';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $cid);
$stmt->execute();
$stmt->bind_result($c_name, $caddress, $c_contactname, $c_contactphone);
while($stmt->fetch()) { }
?>

<h1><?=$c_name?> (<?=$caddress?>)</h1>

Start: <?=$c_contactname?><br>
Slut: <?=$c_contactphone?><br>
</p> <br>

<h3>Ændre klients oplysninger</h3>
<form action="updateclient.php" method="post">
<input type="text" name="Client_Name" maxlength="30" placeholder="Klientens nye navn" required> <br>
<input type="text" name="Client_Adress" maxlength="20" placeholder="Ny adresse" required> <br>
<input type="text" name="Client_Contact_Name" maxlength="20" placeholder="Nyt kontakt navn" required> <br>
<input type="number" name="Client_Contact_Phone" maxlength="8"placeholder="Nyt kontakt telefon" required> <br>
<input type="number" name="Zip_Code_idZip_Code" maxlength="4" placeholder="Nyt Postnummer" required> <br><br>
<input type="hidden" name="clientid" value="<?=$cid?>">
<input type="submit" value="Update Client">
</form>

</body>
