<?php
function indexAction(){
	require('Views/vIndex.php');
}
function listeAction(){
	$liste=getListeEtudiants();
	require('Views/vListe.php');
}
function detailAction(){
	$code=$_GET['code'];
	$etudiant=getDetailEtudiant($code);
	if(empty($etudiant)){
		echo "cet étudiant n'existe pas !!!!!!!!";
	}
	else{
		require('Views/vDetail.php');
	}
} 
function ajouterAction(){
	 
	if(ajouterEtudiant()){
		echo "etudiant est ajouté !!!!!!!!";
	}
	else {
		echo "etudiant non ajouté !!!!!!!!";
	}
 
}
function supprimerAction(){
	$code=$_GET['code'];
	if(empty($code)){
		echo "le code est vide !!!!!";
	}
	else{
	if(supprimerEtudiant($code)){
	  header('location:index.php?action=liste');
	  }
	else {
		echo "etudiant non supprimé !!!!!!!";
	}
	}
}
 function modifierAction(){
		$code=$_GET['code'];
	if(empty($code)){
		echo "le code est vide !!!!!";
	}
	else{
	if(modifierEtudiant($code)){
	  header('location:index.php?action=detail');
	  }
	else {
		echo "etudiant non modifié !!!!!!!";
	}
	} 
 }
?>