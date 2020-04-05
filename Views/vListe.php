<center><h1>Liste des étudiants</h1></center>

<?php 
foreach($liste as $li){
	?>
<b><?=$li['CodeE']?> &nbsp&nbsp&nbsp&nbsp<?=$li['Prenom']?></b></br>
 
 <?php
}
 ?>