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
  width: 50%;
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
<h2> Gestion des rendez vous  </h2>
<br> 
<h3> Ajout d'un rendez vous </h3>
<form method="post" action="">
<table border="0">
<tr><td> Adresse du rendez vous :</td>
	<td> <input type="text" name="adressrdv" placeholder="Lieu.."></td>
</tr>

<tr><td> Nom du cabinet :</td>
	<td> <input type="text" name="nomprdv" placeholder="Nom.."></td>
</tr>

<tr><td> Heure du rendez vous :</td>
	<td> <input type="time" name="heurerdv" placeholder="Horaire.."></td>
</tr>
<tr><td> Date du rendez vous :</td>
	<td> <input type="datetime-local" name="daterdv" placeholder="Date.."></td>
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
			insertRdv($_POST);
			echo "<br/> Insertion réussie du rendez vous </br>";
		}
		if(isset($_GET['idrdv']))
		{
			$idrdv = $_GET['idrdv'];
			deleteRdv($idrdv);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des classes </h3>
<table border = 1>
<tr> <td> Id du rendez vous </td>
	<td> Lieu </td>
	<td> Nom du cabinet </td>
	<td> Heure </td>
	<td> Date </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lesRdvs = selectALLrdv ();
	foreach($lesRdvs as $unRdv)
	{
	echo "<tr>	<td>".$unRdv['idrdv']."</td>
				<td>".$unRdv['adressrdv']."</td>	
				<td>".$unRdv['nomprdv']."</td>
				<td>".$unRdv['heurerdv']."</td>
				<td>".$unRdv['daterdv']."</td>
				<td> <center> <a href='index.php?page=1&idrdv=".$unRdv['idrdv']."'>
					<img src = 'image/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>

