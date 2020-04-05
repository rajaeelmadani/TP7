<?php
 function getCn(){	
	$user="root";
	$pass="hakima";
	$db='mysql:host=localhost;dbname=smi2020';
	try{
		
		$conx=new PDO($db,$user,$pass);
	}
	catch(PDOExeception $db){
		die("erreur de connexion :".$db->getMessage());
	}
	return $conx;
} 
function getListeEtudiants(){
	$conx=getCn();
	$req="select * from etudiant";
	return $conx->query($req)->fetchAll();
}
function getDetailEtudiant($code){
	$conx=getCn();
	$req="select * from etudiant where CodeE='".$code."'";
	return $conx->query($req)->fetch();

}
 
function ajouterEtudiant(){
			 
      $conx=getCn();
        $CodeE= $_POST['CodeE'];
        $Nom= $_POST['Nom'];
       $Prenom =  $_POST['Prenom'];
       $Filiere = $_POST['Filiere'];
       $Note = $_POST['Note'];
		
   $requete="INSERT INTO `etudiant` ( `CodeE`, `Nom`, `Prenom`,`Filiere`,`Note`) VALUES ( :CodeE, :Nom, :Prenom,:Filiere,:Note)";
  $result=$conx->prepare($requete);
  return $result->execute(array(":CodeE"=>$CodeE,":Nom"=>$Nom,":Prenom"=>$Prenom, ":Filiere"=>$Filiere,":Note"=>$Note));
 
}
 
function supprimerEtudiant($code){
	$conx=getCn();
	$req="delete from etudiant where CodeE='".$code."'";
	return $conx->query($req);

}
function modifierEtudiant($code){
			 
      $conx=getCn();
         $Nom= $_POST['Nom'];
       $Prenom =  $_POST['Prenom'];
       $Filiere = $_POST['Filiere'];
       $Note = $_POST['Note'];
		
   $requete= "UPDATE `etudiant` SET Nom='".$Nom."',Prenom='".$Prenom."' ,Filiere='".$Filiere."' ,Note='".$Note."' WHERE CodeE='".$code."'";
  $result=$conx->prepare($requete);
  return $result->execute(array(":Nom"=>$Nom,":Prenom"=>$Prenom, ":Filiere"=>$Filiere,":Note"=>$Note));
 
}
?>