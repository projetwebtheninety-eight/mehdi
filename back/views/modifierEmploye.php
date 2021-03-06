<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product - Dashboard Admin Template</title>
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

<body id="reportsPage">
<div class="container">
    <?php include("../codex/header.php"); ?>
    <!-- row -->

    <div class="row tm-mt-big">
        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
            <div class="bg-white tm-block">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-block-title d-inline-block">Modifier panier</h2>
                    </div>
                </div>
                <div class="row mt-4 tm-edit-product-row">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <?PHP
                        include "../entities/employe.php";
                        include "../core/employeC.php";
                        if (isset($_GET['reference'])){

                            $commandeC=new commandeC();
                            $result=$commandeC->recupererEmploye($_GET['reference']);
                            foreach($result as $row){
                                $reference=$row['reference'];
                                $nom=$row['nom'];
                                $mail=$row['mail'];
                                $telephone=$row['telephone'];
                                $date=$row['date'];
                                $adresse=$row['adresse'];
                                ?>
                                <form action="afficherEmploye.php" name="f" class="tm-edit-product-form" method="post" >
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Reference

                                        </label>
                                        <input id="reference" name="reference" type="number" value="<?PHP echo $reference?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 " ">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Nom

                                        </label>
                                        <input id="nom" name="nom" type="text"  value="<?PHP echo $nom ?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Mail

                                        </label>
                                        <input id="mail" name="mail" type="text"  value="<?PHP echo $mail?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Telephone

                                        </label>
                                        <input id="telephone" name="telephone" type="text"  value="<?PHP echo $telephone?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Date

                                        </label>
                                        <input id="date" name="date" type="text"  value="<?PHP echo $date?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">adresse

                                        </label>
                                        <input id="adresse" name="adresse" type="text"  value="<?PHP echo $adresse?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "">
                                    </div>
                                    <div>
                                        <button type="submit" id="modifier"name="modifier" value="modifier" class="btn btn-primary">modifier</button>
                                    </div>
                                    <div>
                                        <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['reference'];?>">
                                    </div>





                                </form>
                                <?PHP
                            }
                        }
                        ?>


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