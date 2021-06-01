<?php
function connexion ()
{
	$con = mysqli_connect("localhost", "root", "" ,"medicc");
	if ($con == null)
	{
		echo "<br/> Erreur de connexion au serveur !</br>";
	}
	return $con;
}
function deconnexion ($con)
{
	mysqli_close($con);
}
/******************************************************** Gestion des rdv *******************************************************************/
function insertRdv ($tab)
{
	$con = connexion ();
	if($con != null)
	{
	$requete ="insert into rdv values (null, '".$tab['adressrdv'] ."','".$tab['nomprdv']."','".$tab['heurerdv']."','".$tab['daterdv']."');";
	mysqli_query($con, $requete);
	deconnexion($con);
	}
}
function selectALLrdv ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select *  from rdv ;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats ;
	}	
}
function deleteRdv ($idrdv)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from rdv where idrdv =".$idrdv.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}


/********************************************************** Gestion des medecin **********************************************************/

function insertmedecin ($tab)
{
	$con = connexion ();
	if($con != null)
	{
	$requete ="insert into medecin values (null, '".$tab['nommed'] ."','".$tab['prenommed']."','".$tab['adressmed']."','".$tab['mailmed']."','".$tab['telmed']."');";
	mysqli_query($con, $requete);
	deconnexion($con);
	}
}

function selectALLmedecin ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select *  from medecin ;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats ;
	}	
}

function deletemedecin ($idmed)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from medecin where idmed =".$idmed.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}


/********************************************************** Gestion des patients **********************************************************/

function insertpatient ($tab)
{
	$con = connexion ();
	if($con != null)
	{
	$requete ="insert into patient values (null, '".$tab['nompat'] ."','".$tab['prenompat']."','".$tab['telpat']."','".$tab['adressepat']."','".$tab['datenaiss']."','".$tab['montant']."','".$tab['idrdv']."');";
	mysqli_query($con, $requete);
	deconnexion($con);
	}
}

function selectALLpatient ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select * from patient ;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats ;
	}	
}

function deletepatient ($idpat)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from patient where idpat =".$idpat.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}

/********************************************************** Gestion des médicaments **********************************************************/

function insertmedicament ($tab)
{
	$con = connexion ();
	if($con != null)
	{
	$requete ="insert into medicament values (null, '".$tab['nommedica'] ."','".$tab['prixmedica']."');";
	mysqli_query($con, $requete);
	deconnexion($con);
	}
}

function selectALLmedicament ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select *  from medicament ;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats ;
	}	
}

function deletemedicament ($idmedica)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from medicament where idmedica =".$idmedica.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}
/************************************************ Gestion des maladies *************************************************/ 
function insertmaladie ($tab)
{
	$con = connexion ();
	if($con != null)
	{
	$requete ="insert into maladie values (null, '".$tab['nommal'] ."','".$tab['typemal']."','".$tab['idpat']."');";
	mysqli_query($con, $requete);
	deconnexion($con);
	}
}

function selectALLmaladie ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select *  from maladie ;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats ;
	}	
}

function deletemaladie ($idmal)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from maladie where idmal =".$idmal.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}
?>