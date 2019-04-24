<?php 
	include "../core/produitC.php";
	$produit = new ProduitC();
	
	echo $produit->reduireQuantite($_GET["id"]);

?>
	
