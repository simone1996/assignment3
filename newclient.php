<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New client</title>
</head>

<body>

<h1>Opret ny klient</h1>

<form action="newclient.inc.php" method="post">
<input type="text" name="Client_Name" maxlength="30" placeholder="Klientens navn" required> <br>
<input type="text" name="Client_Adress" maxlength="20" placeholder="Adresse" required> <br>
<input type="text" name="Client_Contact_Name" maxlength="20" placeholder="Kontakt navn" required> <br>
<input type="number" name="Client_Contact_Phone" maxlength="8"placeholder="Kontakt telefon" required> <br>
<input type="number" name="Zip_Code_idZip_Code" maxlength="4" placeholder="Postnummer" required> <br><br>
<input type="submit" value="Add new Client">
</form>

<br>
<a href="index.php">Tilbage til oversigt</a>



</body>
</html>