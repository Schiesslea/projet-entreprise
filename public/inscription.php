<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/client-db.php';


// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$nom_client = "";
$prenom_client = "";
$adresse_client = "";
$ville_client = "";
$codepostal_client = "";
$email_client = "";
$pseudo_client = "";
$mdp_client = "";
$confirm_mdp_client = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $nom_client = $_POST['nom_client'];
    $prenom_client = $_POST['prenom_client'];
    $adresse_client = $_POST['adresse_client'];
    $ville_client = $_POST['ville_client'];
    $codepostal_client = $_POST['codepostal_client'];
    $email_client = $_POST['email_client'];
    $pseudo_client = $_POST['pseudo_client'];
    $mdp_client = $_POST['mdp_client'];
    $confirm_mdp_client = $_POST['confirm_mdp_client'];
    //Validation des données
    if (empty($nom_client)) {
        $erreurs['nom_client'] = "Le nom est obligatoire";
    }
    if (empty($prenom_client)) {
        $erreurs['prenom_client'] = "Le prénom est obligatoire";
    }
    if (empty($adresse_client)) {
        $erreurs['adresse_client'] = "L'adresse est obligatoire";
    }
    if (empty($ville_client)) {
        $erreurs['ville_client'] = "La ville est obligatoire";
    }
    if (empty($codepostal_client)) {
        $erreurs['codepostal_client'] = "Le code postal est obligatoire";
    }
    if (empty($email_client)) {
        $erreurs['email_client'] = "L'email est obligatoire";
    } elseif (!filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email_client'] = "L'email n'est pas valide";
    }
    if (empty($pseudo_client)) {
        $erreurs['pseudo_client'] = "Le pseudo est obligatoire";
    }
    if (empty($mdp_client)) {
        $erreurs['mdp_client'] = "Le mot de passe est obligatoire";
    }
    if (empty($confirm_mdp_client)) {
        $erreurs['confirm_mdp_client'] = "La confirmation du mot de passe est obligatoire";
    }
    if ($mdp_client != $confirm_mdp_client) {
        $erreurs['mdp_client'] = "Vous devez mettre le même mot de passe";
        $erreurs['confirm_mdp_client'] = "Vous devez mettre le même mot de passe";
    }
    if (strlen($mdp_client) > 14 || strlen($mdp_client) < 8) {
        $erreurs['mdp_client'] = "Votre mot de passe doit contenir entre 8 et 14 caractères";
    }
    if (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mdp_client)) {
        $erreurs['mdp_client'] = "Votre mot de passe doit contenir un chiffre, une minuscule, un caractère spécial et une majuscule";
    } else {


        getClient($email_client);
        if (getClient($email_client)) {
            $erreurs['email_client'] = "L'email est déjà associé à un compte";
        } else {
            // email n'existe pas


            // Traiter les données
            if (empty($erreurs)) {
                postClient($nom_client, $prenom_client, $adresse_client, $ville_client, $codepostal_client, $email_client, $pseudo_client, $mdp_client);

                // Rediriger l'utilisateur vers une autre page du site
                header("Location: /connexion.php");
                exit();
            }
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

    <title>Création d'un compte</title>
    <link rel="shortcut icon" href="assets/images/Schiesslé-Andy-SIO1-SLAM_logo-entreprise-removebg-preview.png">

</head>
<body id="style-3">
<?php require_once "../base.php";
require_once BASE_PROJET . '/src/_partials/menu.php';
?>
<div class="container">
    <h1 class="mt-4 " style="border-bottom: solid; border-bottom-color: skyblue">Création d'un
        compte</h1>
</div>
<!-- Création d'un compte -->
<div class="container d-flex">
    <div class="w-50 mx-auto shadow row my-5 p-4 rounded" style="background-color: skyblue">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="nom_client" class="form-label">Nom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['nom_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="nom_client" name="nom_client" value="<?= $nom_client ?>"
                       placeholder="Saisir votre nom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['nom_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['nom_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="prenom_client" class="form-label">Prénom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['prenom_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="prenom_client" name="prenom_client" value="<?= $prenom_client ?>"
                       placeholder="Saisir votre prénom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['prenom_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['prenom_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="adresse_client" class="form-label">Adresse*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['adresse_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="adresse_client" name="adresse_client" value="<?= $adresse_client ?>"
                       placeholder="Saisir votre adresse"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['adresse_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['adresse_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="ville_client" class="form-label">Ville*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['ville_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="ville_client" name="ville_client" value="<?= $ville_client ?>"
                       placeholder="Saisir votre ville"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['ville_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['ville_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="codepostal_client" class="form-label">Code Postal*</label>
                <input type="number"
                       class="form-control <?= (isset($erreurs['codepostal_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="codepostal_client" name="codepostal_client" value="<?= $codepostal_client ?>"
                       placeholder="Saisir votre code postal"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['codepostal_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['codepostal_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="pseudo_client" class="form-label">Pseudo*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['pseudo_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="pseudo_client" name="pseudo_client" value="<?= $pseudo_client ?>"
                       placeholder="Saisir votre pseudo"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['pseudo_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['pseudo_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="email_client" class="form-label">Email*</label>
                <input type="email"
                       class="form-control <?= (isset($erreurs['email_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="email_client"
                       name="email_client" value="<?= $email_client ?>" placeholder="Saisir votre email"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['email_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['email_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="mdp_client" class="form-label">Mot de passe*
                    <button type="button" class="btn   " data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        <i class="bi bi-info-circle"></i>
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Les caractéristiques de votre
                                        mot de passe </h1>
                                    <button type="button" class="btn-close " data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>
                                            Votre mot de passe doit contenir entre 8 et 14 caractères
                                        </li>
                                        <li>
                                            Il doit contenir au moins une minuscule, une majuscule, un caractère spécial
                                            et un chiffre
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <input type="password"
                       class="form-control <?= (isset($erreurs['mdp_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="mdp_client" name="mdp_client"
                       value="<?= (!empty($erreurs)) ? $mdp_client : "" ?>" placeholder="Saisir votre mot de passe"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['mdp_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['mdp_client'] ?></p>
                <?php endif; ?>
                <p></p>
            </div>
            <div class="mb-3">
                <label for="confirm_mdp_client" class="form-label">Confirmer votre mot de passe*</label>
                <input type="password"
                       class="form-control  <?= (isset($erreurs['confirm_mdp_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="confirm_mdp_client" name="confirm_mdp_client"
                       value="<?= $confirm_mdp_client ?>"
                       placeholder="Saisir à nouveau votre mot de passe"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['confirm_mdp_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['confirm_mdp_client'] ?></p>
                <?php endif; ?>
            </div>
            <p>* Champs obligatoires</p>
            <div class="text-center">
                <button type="submit" class="btn btn-light ">Valider</button>
            </div>
            <p class="mt-3">Vous possédez déjà un compte ? <a href="/connexion.php" class="text-dark">connectez-vous</a>
            </p>
        </form>
    </div>
</div>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>