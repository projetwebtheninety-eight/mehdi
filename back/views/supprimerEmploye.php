<?PHP
include "../core/employeC.php";
$commandeC=new CommandeC();
if (isset($_POST["reference"])){
	$commandeC->supprimerEmploye($_POST["reference"]);
	header('Location: afficherEmploye.php');
}

?>