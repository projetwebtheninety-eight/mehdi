<?php 
	include "../core/produitC.php";
	$produit = new ProduitC();
	
	echo $produit->ajouterQuantite($_GET["id"]);

?>
	
