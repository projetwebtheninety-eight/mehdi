<?PHP
include "../core/panierC.php";
$employeC=new panierC();
if (isset($_POST["reference"])){
	$employeC->supprimerEmploye($_POST["id"]);
	header('Location: afficherpanier.php');
}

?>