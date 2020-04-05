 <?php
 require('Models/EtudiantManager.php');
   require('Controller/EtudiantController.php');
    
	$action = isset( $_GET['action']) ? $_GET['action'] : 'acceuil';
switch($action){
	
	case 'acceuil':
	indexAction();
	break;
	case 'liste':
	listeAction();
	break;
	case 'detail':
	detailAction();
	break;
	case 'ajouter':
	require('Views/vFormAjouter.php');
	break;
	case 'ajouterEtd':
    ajouterAction();
	break;
	case 'supprimer':
     supprimerAction();
	break;
	case 'modifier':
	 $code=$_GET['code'];
	 $etd=getDetailEtudiant($code);
     require('Views/vFormModifier.php');
	break;
	case 'modifierEtd':
	modifierAction();
	break;
}
?>