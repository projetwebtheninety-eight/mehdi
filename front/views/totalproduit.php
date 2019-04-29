<?php 
	include "../core/produitC.php";
	$produit = new ProduitC();
	
	echo $produit->afficherTotalProduit($_GET["id"]);

?>
	
