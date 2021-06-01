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
.pm {
	width: 30%;

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
<h2> Gestion des maladies </h2>
<br> 
<h3> Ajout d'une maladie </h3>
<form method="post" action="">
<table border="0">
<tr><td> Nom précis de la maladie:</td>
	<td> <input type="text" name="nommal" placeholder="Son nom.."></td>
</tr>


<div class="pm">
    <label for="typemal">Principales maladies</label>
    <select id="typemal" name="typemal">
	  <option value="Maladies cardiovasculaires">Maladies cardiovasculaires</option>
      <option value="Cancers">Cancers</option>
      <option value="Système nerveux, cerveau">Système nerveux, cerveau...</option>
      <option value="Problèmes respiratoires">Problèmes respiratoires</option>
      <option value="Problèmes intimes">Problèmes intimes</option>
      <option value="Maladies de peau">Maladies de peau</option>
      <option value="Troubles digestifs">Troubles digestifs</option>
      <option value="Os et articulations">Os et articulations</option>
      <option value="Grandes maladies">Grandes maladies</option>
      <option value="Drogues et dépendances">Drogues et dépendances</option>
      </select>
  		</form>
     </div>


</tr>
<tr><td> Id patient :</td>
	<td> <input type="text" name="idpat" placeholder="Numéro du patient.."></td>
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
			insertmaladie($_POST);
			echo "<br/> Insertion réussie de la maladie </br>";
		}
		if(isset($_GET['idmal']))
		{
			$idmal = $_GET['idmal'];
			deletemaladie($idmal);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des maladies </h3>
<table border = 1>
<tr> <td> Id de la maladie </td>
	<td> Nom de la maladie </td>
	<td> Type de la maladie </td>
	<td> Id du patient </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lesmaladies = selectALLmaladie (); 
	foreach($lesmaladies as $unemaladie)
	{
	echo "<tr>	<td>".$unemaladie['idmal']."</td>
				<td>".$unemaladie['nommal']."</td>	
				<td>".$unemaladie['typemal']."</td>
				<td>".$unemaladie['idpat']."</td>
				<td> <center> <a href='index.php?page=5&idmal=".$unemaladie['idmal']."'>
					<img src = 'image/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>



