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
  width: 90%;
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
<h2> Gestion des médecins </h2>
<br> 
<h3> Ajout un médecin </h3>   
<form method="post" action="">
<table border="0">
<tr><td> Nom :</td>
	<td> <input type="text" name="nommed" placeholder="Ton nom.."></td>
</tr>

<tr><td> Prénom :</td>
	<td> <input type="text" name="prenommed" placeholder="Ton prénom.."></td>
</tr>

<tr><td> Téléphone :</td>
	<td> <input type="number" name="telmed" placeholder="Numéro.."></td>
</tr>

<tr><td> Adresse :</td>
	<td> <input type="text" name="adressmed" placeholder="Lieu.."></td>
</tr>

<tr><td> email :</td>
	<td> <input type="email" name="mailmed" placeholder="Le mail.."></td>
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
			insertmedecin($_POST);
			echo "<br/> Insertion réussie du médecin </br>";
		}
		if(isset($_GET['idmed']))
		{
			$idmed = $_GET['idmed'];
			deletemedecin($idmed);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des médecins </h3>
<table border = 1>
<tr> <td> Id du médecin </td>
	<td> Nom du médecin </td>
	<td> prénom du médecin </td>
	<td> tel du médecin </td>
	<td> adresse du médecin </td>
	<td> email du médecin </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lesmedecins = selectALLmedecin ();			
	foreach($lesmedecins as $unmedecin)
	{
	echo "<tr>	<td>".$unmedecin['idmed']."</td>
				<td>".$unmedecin['nommed']."</td>	
				<td>".$unmedecin['prenommed']."</td>
				<td>".$unmedecin['telmed']."</td>
				<td>".$unmedecin['adressmed']."</td>
				<td>".$unmedecin['mailmed']."</td>
				<td> <center> <a href='index.php?page=2&idmed=".$unmedecin['idmed']."'>
					<img src = 'image/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>

