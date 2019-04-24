<?PHP
include "E:\LOGICIELS\wamp64\www\laCave\config.php";
class ProduitC {

	function afficherProduit($reference){
		$sql = "select * from produit join panier where produit.reference = panier.id and produit.reference = $reference";
		$db = config::getConnexion();
		$liste =  $db->query($sql);
		return $liste;
	}
	function afficherProduits(){
		$sql = "select * from produit join panier where produit.reference = panier.id";
		$db = config::getConnexion();
		$liste =  $db->query($sql);
		return $liste;
	}

	function afficherTotal() {
		$sql = "select sum(produit.prix * panier.quantite) from produit join panier where panier.id = produit.reference";
		$db = config::getConnexion();
		return $db->query($sql)->fetch(PDO::FETCH_BOTH)[0];
	}
	function afficherTotalProduit($reference) {
		$sql = "select sum(produit.prix * panier.quantite) from produit join panier where panier.id = produit.reference and produit.reference =".$reference;
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
