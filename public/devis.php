<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/devis-db.php';
require_once BASE_PROJET . '/src/database/produit-db.php';

session_start();
if (empty($_SESSION)) {
    header("Location: index.php");
}
$client = null;
if (isset($_SESSION["client"])) {
    $client = $_SESSION["client"];
}

$produits = getProduit();

// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$nom = "";
$prenom = "";
$telephone = "";
$libelleRue = "";
$ville = "";
$codePostal = "";
$pays = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $libelleRue = $_POST['libelle_rue'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['code_postal'];
    $pays = $_POST['pays'];


    //Validation des données
    if (empty($nom)) {
        $erreurs['nom'] = "Le nom est obligatoire";
    }
    if (empty($prenom)) {
        $erreurs['prenom'] = "La prénom est obligatoire";
    }
    if (empty($telephone)) {
        $erreurs['telephone'] = "Le numéro de téléphone est obligatoire";
    }
    if (empty($libelleRue)) {
        $erreurs['libelle_rue'] = "Le lib est obligatoire";
    }
    if (empty($ville)) {
        $erreurs['ville'] = "Le pays est obligatoire";
    }
    if (empty($codePostal)) {
        $erreurs['code_postal'] = "Le pays est obligatoire";
    }
    if (empty($pays)) {
        $erreurs['pays'] = "L'image est obligatoire";
    }


    // Traiter les données
    if (empty($erreurs)) {
        foreach ($produits as $produit) {
            postDevis($client["id_client"], $produit["id_produit"], $nom, $prenom, $telephone, $libelleRue, $ville, $codePostal, $pays);
            // Rediriger l'utilisateur vers une autre page du site
            header("Location: /index.php");
            exit();
        }


    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Devis</title>

</head>
<body id="style-3">
<!--Insertion d'un menu-->
<?php require_once "../base.php";
require_once BASE_PROJET . '/src/_partials/menu.php';
?>
<div class="container">

    <h1 class="mt-4 " style="color: #86C232; border-bottom: solid; border-bottom-color: #86C232">Devis</h1>
</div>
<div class="container d-flex">

    <div class="w-50 mx-auto shadow my-5  p-4 bg-gradient">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="nom" class="form-label">nom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['nom'])) ? "border border-2 border-danger" : "" ?>"
                       id="nom" name="nom" value="<?= $nom ?>" placeholder="Saisir votre nom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['nom'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['nom'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">prénom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['prenom'])) ? "border border-2 border-danger" : "" ?>"
                       id="prenom"
                       name="prenom" value="<?= $prenom ?>" placeholder="Saisir votre prénom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['prenom'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['prenom'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">téléphone*</label>
                <input type="number"
                       class="form-control <?= (isset($erreurs['telephone'])) ? "border border-2 border-danger" : "" ?>"
                       id="telephone" name="telephone" value="<?= $telephone ?>"
                       placeholder="Saisir votre numéro de téléphone"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['telephone'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['telephone'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="libelle_rue" class="form-label">libellé rue*</label>
                <input type="number"
                       class="form-control  <?= (isset($erreurs['libelle_rue'])) ? "border border-2 border-danger" : "" ?>"
                       id="libelle_rue" name="libelle_rue" value="<?= $libelleRue ?>"
                       placeholder="Saisir votre libellé de rue"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['libelle_rue'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['libelle_rue'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">ville*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['ville'])) ? "border border-2 border-danger" : "" ?>"
                       id="ville" name="ville" value="<?= $ville ?>" placeholder="Saisir la ville"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['ville'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['ville'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="code_postal" class="form-label">code postal*</label>
                <input type="number"
                       class="form-control <?= (isset($erreurs['code_postal'])) ? "border border-2 border-danger" : "" ?>"
                       id="code_postal" name="code_postal" value="<?= $codePostal ?>"
                       placeholder="Saisir le postal"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['code_postal'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['code_postal'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="pays" class="form-label">pays*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['pays'])) ? "border border-2 border-danger" : "" ?>"
                       id="pays" name="pays" value="<?= $pays ?>" placeholder="Saisir le pays"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['pays'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['pays'] ?></p>
                <?php endif; ?>
            </div>
            <p>* Champs obligatoires</p>
            <button type="submit" class="btn btn-light">Valider</button>
        </form>
    </div>
</div>
</div>


<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>