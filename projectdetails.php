<?php
$pid = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
require_once 'dbcon.php';
$sql = 'SELECT Project_Name, Project_Description, Project_Startdate, Project_Enddate 
FROM project
WHERE idProject = ?';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $pid);
$stmt->execute();
$stmt->bind_result($p_name, $p_description , $p_start_date , $p_end_date);
while($stmt->fetch()) { 
?>
<h1><?=$p_name?></h1>
<h2>Beskrivelse:</h2><p><?=$p_description?></p>
<p>
Start: <?=$p_start_date?><br>
Slut: <?=$p_end_date?><br>
<?php
}
?>


<br><br>


<h2>Ressourcer i projektet</h2>

<ul>
<?php
//$rid = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter')
require_once 'dbcon.php';
$sql = 'select Ressource_Name, Other_Ressource_Details, From_Date_Time, To_Date_Time, Hourly_Usage_Time from Project
join ProjectRessources
on Project.idProject = ProjectRessources.Project_idProject
join Ressource
on ProjectRessources.Ressource_idRessource = Ressource.idRessource
where idProject=?;';
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

