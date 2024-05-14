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
        <?php foreach ($devis as $detail) : ?>
            /* problème ici car $devis récupère les 2 devis de la bdd, faut récupérer les infos que de celui qui nous intéresse, avec fonction je pense.
            <p class="col-3"> <?= $detail['nom'] . $detail['prenom'] ?></br>
                <?= $detail['libelleRue'] ?> </br>
                <?= $detail['codePostal'] . $detail['ville'] ?></p>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>