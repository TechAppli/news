
<?php

require_once('connection.php');

?>
<?php

function random($car) {
		$string = "";
		$chaine = "abcdefghijklmnpqrstuvwxy";
		srand((double)microtime()*1000000);
		for($i=0; $i<$car; $i++) {
		$string .= $chaine[rand()%strlen($chaine)];
		}
		return $string;
		}
    function add_user($nom,$mail,$mdp,$tokens)
	{
		
	  
	  $sql="INSERT INTO `utilisateur`( `nom`, `mail`, `mdp`, `tokens`, `confirmed`, `expir_date`) VALUES ('$nom','$mail','$mdp','$tokens',0,'2012-10-16')";
	  mysql_query($sql) or die('erreur');
	  mysql_close();
		
	
	}
	function user_confirm($tokens)
	{
      $sql="UPDATE utilisateur
		SET   confirmed = 1
		WHERE tokens='$tokens'";
		mysql_query($sql);
		mysql_close();
	}/*
   function recherche_simple($nomduproduit)
   {
   	$sql="select NomProduit,PrixUnitaire from  produit where NomProduit   LIKE  '%$nomduproduit%' " ;
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return $retour;
   }
   function recherche_multi($nomduproduit,$Categorie,$prixmax,$prixmin)
   {
   		$sql="select NomProduit,PrixUnitaire from  produit where NomProduit   LIKE  '%$nomduproduit%'  and CodeCategorie=$Categorie and  $prixmin<PrixUnitaire<$prixmax " ;
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return $retour;
   }

	function get_Produit_Categorie()
	{
		$sql="select * from Produit join Categorie on Produit.CodeCategorie=Categorie.CodeCategorie";
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return $retour;
	}
	function get_Produit()
	{
		 $sql=" select*from Produit ";	
		$result = mysql_query($sql);
		$retour = array();
		while ($row = mysql_fetch_array($result)) 
		
		{
			$retour[] = $row;
		}
		return $retour;
	}
	
	function get_categorie()
	{
		$sql="select CodeCategorie,NomCategorie from Categorie";
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return $retour;
	}
	
	function get_Client()
	{
		$sql="select CodeClient,NomClient,Contact,Adresse,email,motdepasse from Client";
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return $retour;
	}
	
	function get_Livreur()
	{
		$sql="select CodeLivreur,NomLivreur,Contact from Livreur";
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return $retour;
	}
		
	function get_Commande()
	{
		$sql="select IdCommande,DateCommande,CodeClient,CodeLivreur,AdresseLivraison,EstFini,EstLivre from Commande";
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return retour;
	}
		function get_DetailCommande()
	{
		$sql="select IdDetailCommande,IdCommande,CodeProduit,PrixUnitaire from DetailCommande";
		$result=mysql_query($sql);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return retour;
	}

	function get_Admin($Nomutil,$Mtdepasse)
	{
		$sql7="Select count(*) from administrateur where login='$Nomutil' and  motdepasse='$Mtdepasse' ";
		$val = mysql_query($sql7);
		$row=mysql_fetch_array($val);
		if( $row['count(*)']==1)
		{
			return 1;
		}
		if($row['count(*)']!=1)
		{
			return 0;
		}
	}
	function get_Membre($email,$motdepasse)
	{
		$requete="select count(*) from client where email='$email' and motdepasse='$motdepasse' ";
        $result =mysql_query($requete);
		$row=mysql_fetch_array($result);
		if( $row['count(*)']==1)
		{
			return 1;
		}
		if($row['count(*)']!=1)
		{
			return 0;
		}
	}
	function get_admn()
	{
		$requete="select * from  administrateur";
		$result=mysql_query($requete);
		$retour=array();
		while ($row=mysql_fetch_array($result))
		{
			$retour[]=$row;
		}
		return $retour;
	}
	
	function ajout_produit($NomProduit,$PrixUnitaire,$CodeCategorie,$imageProduit)
	{
		$sql="insert into Produit (NomProduit,PrixUnitaire,CodeCategorie,imageProduit) values('$NomProduit','$PrixUnitaire','$CodeCategorie','$imageProduit')";
		mysql_query($sql);
		mysql_close();
	}
	
	
	function MAJ_Categorie($NomProduitA,$NomProduitv)
	{
		$sql="UPDATE Categorie
		SET    NomCategorie = '$NomProduitv'
		WHERE  NomCategorie='$NomProduitA'";
		mysql_query($sql);
		mysql_close();
	}
	*/
?>