<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<!-- Ressource typer -->
<h1>Ressource typer</h1>

<p><a href="index.php">Tilbage til oversigt</p></a>
<ul>

<?php
require_once 'dbcon.php';

$sql = 'SELECT idRessource_Type_Code, Ressource_Type_Name
FROM Ressource_Type_Code';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($rtc, $rtnam);

while($stmt->fetch()) {
	echo '<li><a href="restyp.php?cid='.$rtc.'">'.$rtnam.'</a></li>'.PHP_EOL;
}
?>
</ul>


</body>
</html>