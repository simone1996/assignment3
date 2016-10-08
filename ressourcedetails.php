<?php require_once 'dbcon.php';
//$cid = filter_input(INPUT_GET, 'rid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter')
$sql = 'SELECT Project_idProject, Project_Name, Project_Description
from Project
join ProjectRessources
on Project.idProject = ProjectRessources.Project_idProject
join Ressource
on ProjectRessources.Ressource_idRessource = Ressource.idRessource
where idRessource=?';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $pid);
$stmt->execute();
$stmt->bind_result($rname, $rdetail, $rfromdate, $rtodate, $rhourly);
while($stmt->fetch()) {
	?>
    
    
    
    <h1><?=$rname?></h1>
<h4>Beskrivelse:</h4><p><?=$rdetail?></p>
<p>
Start: <?=$rfromdate?><br>
Slut: <?=$rtodate?><br>
Slut: <?=$rhourly?><br>
    <?php
}
?>
