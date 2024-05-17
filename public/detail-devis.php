<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/devis-db.php';
require_once BASE_PROJET . '/src/database/produit-db.php';

$id_devis = null;
if (isset($_GET['id_devis'])) {
    $id_devis = filter_var($_GET['id_devis'], FILTER_VALIDATE_INT);
}

$devis = getDevisParId($id_devis);
session_start();
$client = null;
if (isset($_SESSION["client"])) {
    $client = $_SESSION["client"];
}

if (empty($_SESSION)) {
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        section {
            padding: 60px 0;
        }
    </style>
    <title>MA VIDEO EDITOR</title>
    <link rel="shortcut icon" href="assets/images/Schiesslé-Andy-SIO1-SLAM_logo-entreprise-removebg-preview.png">
</head>
<body id="style-3">

<!--    Barre de navigation-->
<?php require_once "../base.php";
require_once BASE_PROJET . '/src/_partials/menu.php';
?>
<div class="container  ">

    <?php if ($devis == null) : ?>
        <h1 class="text-danger text-center">Ce devis n'existe pas</h1>
    <?php elseif ($client['id_client'] != $devis['id_client']) : ?>
        <h1 class="text-danger text-center">Ce devis n'existe pas</h1>
    <?php else : ?>
        <?php $produit = getProduitParId($devis['id_prod']); ?>
        <div class="row align-middle">
            <h1 class="col-9">Devis</h1>



<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <div class="text-muted">
                            <h2>Vendeur</h2>
                            <p class="mb-1" >MA VIDEO EDITOR </p>
                            <p class="mb-1">    37 rue de l'Etang </p>
                            <p class="mb-1">    70140 La Résie Saint Martin</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-muted">
                                <h2 class="font-size-16 mb-3 ">Client</h2>
                                <p class="mb-1"> <?= $devis['nom'] . " " . $devis['prenom'] ?> </p>
                                  <p class="mb-1"><?= $devis['libelleRue'] ?></p>
                                  <p class="mb-1">  <?= $devis['codePostal'] . " " . $devis['ville'] ?></p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-6">
                            <div class="text-muted text-sm-end">
                                <div>
                                    <h5 class="font-size-15 mb-1">Référence</h5>
                                    <p><?= $devis['id_devis'] ?></p>
                                </div>
                                <div class="mt-4">
                                    <h5 class="font-size-15 mb-1">Date d'achat</h5>
                                    <?= date("d/m/Y", strtotime($devis['date'])) ?>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="py-2">
                        <h5 class="font-size-15">Récapitulatif de la commande</h5>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-centered mb-0">
                                <thead>
                                <tr>
                                    <th style="width: 70px;">No°Produit</th>
                                    <th>Description du produit</th>
                                    <th>Durée de l'abonnement</th>
                                    <th>Quantité</th>
                                    <th class="text-end" style="width: 120px;">Prix</th>
                                </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                <tr>
                                    <th scope="row"> <?= $produit['id_prod'] ?></th>
                                    <td>
                                        <div>
                                            <?= $produit['designation_prod'] ?>
                                        </div>
                                    </td>
                                    <td>
                                    <?php if ($produit['designation_prod'] == "Plan mensuel") {
                                            echo "1 mois";
                                        } elseif ($produit['designation_prod'] == "Plan annuel") {
                                            echo "1 an";
                                        } else {
                                            echo "À vie";
                                        } ?>
                                    </td>
                                    <td>1</td>
                                    <td class="text-end">  <?= $produit['prix_prod'] . "€" ?></td>
                                </tr>

                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                    <td class="border-0 text-end"><h4 class="m-0 fw-semibold"> <?= $produit['prix_prod'] . "€" ?>
                                        </h4></td>
                                </tr>
                                <!-- end tr -->
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                            <p class="conditions">
                                En votre aimable règlement
                                <br>
                                Et avec nos remerciements.
                                <br><br>
                                Conditions de paiement : paiement à réception de facture, à 15 jours.
                                <br>
                                Aucun escompte consenti pour règlement anticipé.
                                <br>
                                Règlement par virement bancaire.
                                <br><br>
                                En cas de retard de paiement, indemnité forfaitaire pour frais de recouvrement : 40 euros (art. L.4413 et
                                L.4416
                                code du commerce).
                            </p>

                            <br>
                            <br>
                            <br>
                            <br>

                            <p class="text-end">
                                90TECH SAS - N° SIRET 80897753200015 RCS METZ<br>
                                37, Rue de l'Étang - 70140 La Résie Saint Martin 06 43 21 33 38 - www.mavideoeditor.fr<br>
                                Code APE 6201Z - N° TVA Intracom. FR 77 808977532<br>
                                IBAN FR76 1470 7034 0031 4211 7882 825 - SWIFT CCBPFRPPMTZ
                            </p>
                        </div><!-- end table responsive -->
                        <div class="d-print-none mt-4">
                            <div class="float-end">
                                <a href="javascript:window.print()" class="btn btn-success me-1"><i class="bi bi-printer-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
</div>
        </div>
    <?php endif; ?>

</div>
<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>