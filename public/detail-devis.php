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
<div class="container ">
    
    <?php if ($devis == null) : ?>
        <h1 class="text-danger text-center">Ce devis n'existe pas</h1>
    <?php elseif ($client['id_client'] != $devis['id_client']) : ?>
        <h1 class="text-danger text-center">Ce devis n'existe pas</h1>
    <?php else : ?>
        <?php $produit = getProduitParId($devis['id_prod']); ?>
        <div class="row align-middle">
            <h1 class="col-9">Devis</h1>
            <img src="assets/images/Schiesslé-Andy-SIO1-SLAM_logo-entreprise-removebg-preview.png"
                 class="float-end w-25 col-3  "
                 alt="">
        </div>
        <div class="row">
            <p class="col-3 fw-bold">Vendeur</p>
            <p class="col-3">MA VIDEO EDITOR </br>
                37 rue de l'Etang </br>
                70140 La Résie Saint Martin</p>
        </div>
        <div class="row">
            <p class="col-3 fw-bold">Client</p>
            <p class="col-3"> <?= $devis['nom'] . " " . $devis['prenom'] ?> </br>
                <?= $devis['libelleRue'] ?> </br>
                <?= $devis['codePostal'] . " " . $devis['ville'] ?></p>
        </div>
        <div class="row">
            <p class="col-3 fw-bold">Date :</p>
            <p class="col-3 fw-bold">Référence :</p>
        </div>
        <div class="row">
            <p class="col-3 "><?= date("d/m/Y", strtotime($devis['date'])) ?></p>
            <p class="col-3 "><?= $devis['id_devis'] ?></p>
        </div>
        <p class="fw-bold">Durée de l'abonnement :</p>
        <p><?php if ($produit['designation_prod'] == "Plan mensuel") {
                echo "1 mois";
            } elseif ($produit['designation_prod'] == "Plan annuel") {
                echo "1 ans";
            } else {
                echo "À vie";
            } ?></p>
        <table class="rwd-table">
            <tbody>
            <tr>
                <th>id_produit</th>
                <th>Description du produit</th>
                <th>date de commande</th>
                <th>Prix</th>

            </tr>
            <tr>
                <td data-th="id_produit">
                    <?= $produit['id_prod'] ?>
                </td>
                <td data-th="description du produit">
                    <?= $produit['designation_prod'] ?>
                </td>
                <td data-th="date de commande">
                    <?= date("d/m/Y", strtotime($devis['date'])) ?>
                </td>
                <td data-th="prix">
                    <?= $produit['prix_prod'] . "€" ?>
                </td>
            </tr>
            </tbody>
        </table>
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
    <?php endif; ?>
</div>


<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>