<?php
include "../entities/employe.php";
include "../core/employeC.php";
$commandeC=new commandeC();
if (isset($_POST['modifier'])){
    $commande=new commande($_POST['reference'],$_POST['nom'],$_POST['mail'],$_POST['telephone'],$_POST['date'],$_POST['adresse']);
    $commandeC->modifierEmploye($commande,$_POST['reference_ini']);
    echo $_POST['reference'];
    header('location: afficherEmploye.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des livreurs.</title>
    <script src="add-product.js">
    </script>
    <!--

    Template 2108 Dashboard

    http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/tooplate.css">
</head>
<style type="text/css">
</style>

<body>
<?php include("../codex/header.php"); ?>

<div class="search-content">
        <!-- row -->
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">

                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form name="f" action="supprimerEmploye.php"  method="post">

                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">

                                        <h3>afficher panier</h3>

                                        <?PHP
                                        $commande1C=new commandeC();

                                        $liste=$commande1C->afficherEmployes();

                                        //var_dump($listeEmployes->fetchAll());
                                        ?>
                                        <table border="1">
                                            <tr>
                                                <td>reference</td>
                                                <td>nom</td>
                                                <td>mail</td>
                                                <td>telephone</td>
                                                <td>date</td>
                                                <td>adresse</td>
                                                <td>Supprimer</td>
                                                <td>Modifier</td>
                                            </tr>
<a href="affichercommandetri.php"> afficher les commandes triées </a>
                                            <?PHP
                                            foreach($liste as $row){
                                                ?>
                                                <tr>
                                                    <td><?PHP echo $row['reference']; ?></td>
                                                    <td><?PHP echo $row['nom']; ?></td>
                                                    <td><?PHP echo $row['mail']; ?></td>
                                                    <td><?PHP echo $row['telephone']; ?></td>
                                                    <td><?PHP echo $row['date']; ?></td>
                                                    <td><?PHP echo $row['adresse']; ?></td>
                                                    <td><form method="POST" action="supprimerEmploye.php">
                                                            <input type="submit" name="supprimer" value="supprimer">
                                                            <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
                                                        </form>
                                                    </td>
                                                    <td><a href="modifierEmploye.php?reference=<?PHP echo $row['reference']; ?>">
                                                            Modifier</a></td>
                                                </tr>
                                                <?PHP
                                            }
                                            ?>
                                        </table>


                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018. Created by
                    <a href="http://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a> |  Distributed by <a href="https://themewagon.com" class="text-white tm-footer-link">ThemeWagon</a>
                </p>
            </div>
        </footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
<!-- https://jqueryui.com/download/ -->
<script src="js/bootstrap.min.js"></script>
<!-- https://getbootstrap.com/ -->
</body>

</html>