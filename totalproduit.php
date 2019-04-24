<?php 
	include "../core/prodC.php";
	$produit = new ProduitC();
	
	echo $produit->afficherTotalProduit($_GET["reference"]);

?>
	
