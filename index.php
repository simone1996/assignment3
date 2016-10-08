<?php 
$deleted = "";
$updated = "";
if(isset($_GET['deleted'])){
	$deleted = "Slettet";
}
if(isset($_GET['updated'])){
$updated = "Opdateret";
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web developers</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="header"><br>
    <img src="Webdevelopers.png" alt="logo"/></div>
    <h1>Velkommen til Webdevelopers data. <br> </h1> <h2> Her kan du navigere rundt i dataene.</h2>


<div id="clients">
<!-- Clients -->
<h1>Clients</h1>
<h3><?= $updated ?></h3>
<h2>Klik på en klient for at se flere detaljer</h2>

<h3><a href="newclient.php">Opret ny klient</a></h3>

<ul>

<?php
require_once 'dbcon.php';

$sql = 'SELECT idClient c, Client_Name FROM client';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($cid, $cnam);

while($stmt->fetch()) {
	echo '<li><a href="clientdetails.php?cid='.$cid.'">'.$cnam.'</a></li>'.PHP_EOL;
}
?>
</ul>
<br>
<h2>Slet en klient</h2>
<h3><?= $deleted ?></h3>
<form method="post" action="deleteclient.php">
<select name="delclientlist">
<?php
require_once 'dbcon.php';

$sql = 'SELECT idClient c, Client_Name FROM client';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($cid, $cnam);

while($stmt->fetch()) {
	echo '<option value='.$cid.'>'.$cnam.'</option>';
}
?>
</select>
<input type="submit" value="Delete">
</form>

</div>

<div id="projects">
<!-- Projects -->
<h1>Projects</a></h1>
<h2>Klik på projektet for at se flere detaljer</h2>
<ul>

<?php
require_once 'dbcon.php';

$sql = 'SELECT idProject, Project_Name FROM project';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($pid, $pnam);

while($stmt->fetch()) {
	echo '<li><a href="projectdetails.php?pid='.$pid.'">'.$pnam.'</a></li>'.PHP_EOL;
}
?>
</ul>
</div>

<div id="ressources">
<!-- Ressources -->
<h1>Ressources</h1>
<h2>Klik på en ressource for at se, hvor ressourcen er tilknyttet</h2>

<h2><a href="restyp.php">Se ressource-typer registreret i databasen</h2></a>
<ul>

<?php
require_once 'dbcon.php';

$sql = 'SELECT idRessource, Ressource_Name, Other_Ressource_Details 
FROM ressource';
$stmt1 = $link->prepare($sql);
$stmt1->execute();
$stmt1->bind_result($rid, $rnam, $rdesc);

while($stmt1->fetch()) {
	echo '<li><a href="ressourcedetails.php?cid='.$rid.'">'.$rnam.','.$rdesc.'</a></li>'.PHP_EOL;
}
?>
</ul>
</div>
</body>
</html>