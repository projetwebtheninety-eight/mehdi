<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['reference'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recupererEmploye($_GET['reference']);
	foreach($result as $row){
		$reference=$row['reference'];
		$nom=$row['nom'];
		$mail=$row['mail'];
		$telephone=$row['telephone'];
		$date=$row['date'];
		$adresse=$row['adresse'];

?>
<form method="POST">
<table>
<caption>Modifier commande</caption>
<tr>
<td>Reference</td>
<td><input type="number" name="reference" value="<?PHP echo $reference ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>Telephone</td>
<td><input type="number" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td><input type="submit" name="modifier" value="modifier"></td><td></td>

</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['reference'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['reference'],$_POST['nom'],$_POST['mail'],$_POST['telephone'],$_POST['date'],$_POST['adresse']);
	$commandeC->modifierEmploye($commande,$_POST['reference_ini']);
	echo $_POST['reference_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>