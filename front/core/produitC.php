<?PHP
include "../config.php";
class ProduitC {

	function afficherProduit($id){
		$sql = "select * from produit join panier where produit.id = panier.id and produit.id = $id";
		$db = config::getConnexion();
		$liste =  $db->query($sql);
		return $liste;
	}
	function afficherProduits(){
		$sql = "select * from produit join panier where produit.id = panier.id";
		$db = config::getConnexion();
		$liste =  $db->query($sql);
		return $liste;
	}

	function afficherTotal() {
		$sql = "select sum(produit.prix * panier.quantite) from produit join panier where panier.id = produit.reference";
		$db = config::getConnexion();
		return $db->query($sql)->fetch(PDO::FETCH_BOTH)[0];
	}
	function afficherTotalProduit($id) {
		$sql = "select sum(produit.prix * panier.quantite) from produit join panier where panier.id = produit.id and produit.id =".$id;
		$db = config::getConnexion();
		return $db->query($sql)->fetch(PDO::FETCH_BOTH)[0];
	}

	function ajouterQuantite($id) {
		$sql = "update panier set quantite = quantite+1 where id = $id";
		$db = config::getConnexion();
		$db->query($sql);
	}
	function reduireQuantite($id) {
		$sql = "update panier set quantite = quantite-1 where id = $id";
		$db = config::getConnexion();
		$db->query($sql);
	}

}

?>
