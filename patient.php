<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 80%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
<br/>
<h2> Gestion des patients </h2>
<br> 
<h3> Ajout d'un patient </h3>
<form method="post" action="">
<table border="0">
<h3> Le champ "Rendez vous" est obligatoire pour pouvoir confirmer l'ajout du patient</h3>
<tr><td> Nom :</td>
	<td> <input type="text" name="nompat" placeholder="Ton nom.."></td>
</tr>

<tr><td> Prénom :</td>
	<td> <input type="text" name="prenompat" placeholder="Ton prénom.."></td>
</tr>

<tr><td> Téléphone :</td>
	<td> <input type="tel" name="telpat" placeholder="Ton numéro"></td>
</tr>

<tr><td> Adresse :</td>
	<td> <input type="text" name="adressepat" placeholder="Adresse de résidence .."></td>
</tr>

<tr><td> Date de naissance :</td>
	<td> <input type="date" name="datenaiss" placeholder="Naissance.."></td>
</tr>
<tr><td> Montant :</td>
	<td> <input type="text" name="montant" placeholder="Prix total.."></td>
</tr>
<tr><td> Rendez vous :</td>
	<td> <input type="number" name="idrdv" placeholder="Numéro du rendez vous"></td>
</tr>
<tr> <td>
<input type="reset" name="Annuler" value="Annuler">
	</td>
	<td>

<input type="submit" name="Valider" value="Valider">
	</td>
</tr>
</table>
</form>

	<?php
		if (isset($_POST['Valider']))
		{
			insertpatient($_POST);
			echo "<br/> Insertion du patient réussie </br>";
		}
		if(isset($_GET['idpat']))
		{
			$idpat = $_GET['idpat'];
			deletepatient($idpat);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des patients </h3>
<table border = 1>
<tr> <td> Id du patient </td>
	<td> Nom du patient </td>
	<td> Prénom du patient </td>
	<td> Tel du patient </td>
	<td> Adresse du patient </td>
	<td> Date de naissance du patient </td>
	<td> Montant total </td>
	<td> ID rendez vous </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lespatients = selectALLpatient (); 
	foreach($lespatients as $unpatient)
	{
	echo "<tr>	<td>".$unpatient['idpat']."</td>
				<td>".$unpatient['nompat']."</td>	
				<td>".$unpatient['prenompat']."</td>
				<td>".$unpatient['telpat']."</td>
				<td>".$unpatient['adressepat']."</td>
				<td>".$unpatient['datenaiss']."</td>
				<td>".$unpatient['montant']."</td>
				<td>".$unpatient['idrdv']."</td>
				<td> <center> <a href='index.php?page=4&idpat=".$unpatient['idpat']."'>
					<img src = 'image/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>

