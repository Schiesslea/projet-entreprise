<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/devis-db.php';
require_once BASE_PROJET . '/src/database/produit-db.php';

$devis = getDevis();
session_start();
$client = null;
if (isset($_SESSION["client"])) {
    $client = $_SESSION["client"];
}

if (empty($_SESSION)) {
    header("Location: index.php");
}
$nbDevis = 0;

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
    <h1 class="   border-3 mb-5 mt-4" style="color: #86C232; border-bottom: solid ;border-bottom-color: #86C232">Liste
        des devis</h1>
    <!-- Votre code -->
    <div class="row text-center " href="#home">
        <?php foreach ($devis as $detail) : ?>
            <?php if ($detail['id_client'] == $client['id_client']) : ?>
                <?php $devis = getDevisUser($client['id_client']); ?>
                <?php $nbDevis = 1; ?>

                <div class="card rounded-4  mb-4 me-2" style="max-width: 20rem ">
                    <div class="card-body ">
                        <h4 class="card-title">Référence du devis : <?= $detail['id_devis'] ?></h4>
                        <p class="card-text fs-4 text-dark"><?= date("d/m/Y", strtotime($detail['date'])) ?></p>
                        <p class="card-text fs-4 text-dark"><?php $produit = getProduitParId($detail['id_prod']);
                            echo $produit['designation_prod'] ?></p>

                        <p class="card-text">
                            <a class="btn " style="background-color: #86C232 " role="button"
                               href="detail-devis.php?id_devis=<?= $detail['id_devis'] ?>
                        ">Détails du devis</a></p>

                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <?php if ($nbDevis == 0) : ?>
            <p>Vous n'avez aucun devis</p>
        <?php endif; ?>

    </div>
</div>

<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>