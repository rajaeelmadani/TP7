<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
<style type="text/css">
h2{
	text-align:center;
	color:#8f72cc;
}
#div1{
padding:100px;	  
  background: #ebe6e6; 
   padding-left:400px;
	}
.form-control{
	width:500px;
}
</style>
</head>
<body>
 
<h2>Modifier Etudiant</h2>


<form action="index.php?action=modifierEtd&&code=E1" method="POST" >
<div id="div1">
 
 
<td>Entrer le nom:</td>
<input type="text"  name=<?=$etd['Nom']?> class="form-control"></br></br>
<td>Entrer le prenom :</td>
<input type="text"  name=<?=$etd['Prenom']?> class="form-control" ></br></br>
 
<select name = <?=$etd['Filiere']?>>
 <option value="SMI" selected>Science mathematique et informatique</option>
 <option value="SMP">Science mathematique et physique</option>
 <option value="SMC">Science mathematique et chimie</option>
 <option value="SMA">Science mathematique et application </option>
	
</select></br></br>
 
<input type="text"  name=<?=$etd['Note']?> class="form-control" ></br></br>

<input type = "submit" value ="Modifier">  
  <input type = "reset" value ="Annuler"/>
</div>
</form>

<body>
</html>