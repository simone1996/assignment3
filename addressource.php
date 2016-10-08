<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New client</title>
</head>

<body>

<h1>Tilføj ny ressource til projekt</h1>

<form action="addressource.inc.php" method="post">
<input type="text"  maxlength="20" name="Ressource_Name" placeholder="Ressource Navn" required> <br>
<input type="text" name="Other_Ressource_Details" placeholder="Ressource Detaljer" required> <br>
<input type="number" name="Ressource_Type_Code_id_Ressource_Type_Code" placeholder="Tilknyttet projekt id" required> <br>
<input type="number" name="Pr_Type_Code_id_Ressource_Type_Code" placeholder="Ressource type id" required> <br><br>

<br>

<input type="submit" value="Tilføj ny ressource">
</form>

<br>
<a href="index.php">Tilbage til oversigt</a>



</body>
</html>