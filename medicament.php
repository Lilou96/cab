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
<h2> Gestion des médicaments </h2>
<br> 
<h3> Ajout d'un médicament </h3>
<form method="post" action="">
<table border="0">
<tr><td> Nom :</td>
	<td> <input type="text" name="nommedica" placeholder="Nom du médicament.."></td>
</tr>

<tr><td> Prix :</td>
	<td> <input type="text" name="prixmedica" placeholder="Prix médicament.."></td>
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
			insertmedicament($_POST);
			echo "<br/> Insertion réussie du médicament </br>";
		}
		if(isset($_GET['idmedica']))
		{
			$idmedica = $_GET['idmedica'];
			deletemedicament($idmedica);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des médicaments </h3>
<table border = 1>
<tr> <td> Id du médicament </td>
	<td> Nom du médicament </td>
	<td> Prix du médicament </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lesmedicaments = selectALLmedicament (); 
	foreach($lesmedicaments as $unmedicament)
	{
	echo "<tr>	<td>".$unmedicament['idmedica']."</td>
				<td>".$unmedicament['nommedica']."</td>	
				<td>".$unmedicament['prixmedica']."</td>
				<td> <center> <a href='index.php?page=3&idmedica=".$unmedicament['idmedica']."'>
					<img src = 'image/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>

