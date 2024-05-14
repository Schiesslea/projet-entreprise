<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/client-db.php';
session_start();
if (!empty($_SESSION)) {
    header("Location: index.php");
}

// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$email_client = "";
$mdp_client = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $email_client = $_POST['email_client'];
    $mdp_client = $_POST['mdp_client'];
    //Validation des données
    if (empty($email_client)) {
        $erreurs['email_client'] = "L'email est obligatoire";
    } elseif (!filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email_client'] = "L'email n'est pas valide";
        if (empty($mdp_client)) {
            $erreurs['mdp_client'] = "Le mot de passe est obligatoire";
        }
    }


    $email_user = getClient($email_client);
    $mdp = getMdp($email_client);
    if ($email_user) {
        foreach ($email_user as $info_user) {
            foreach ($mdp as $mdp_user) {
                if (password_verify($mdp_client, $mdp_user)) {
                    session_start();
                    $_SESSION["client"] = [
                        "id_client" => $info_user["id_client"],
                        "pseudo_client" => $info_user["pseudo_client"]
                    ];
                    header("Location: ../index.php");
                    exit();
                } else {
                    $erreurs['email_client'] = "identifiants incorrects";
                    $erreurs['mdp_client'] = "identifiants incorrects";
                }
            }
        }

    } else {
        $erreurs['email_client'] = "identifiants incorrects";
        $erreurs['mdp_client'] = "identifiants incorrects";
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

    <title>Connexion à un compte</title>
    <link rel="shortcut icon" href="/public/assets/images/film.svg">

</head>
<body id="style-3">
<!--Insertion d'un menu-->
<?php require_once "../base.php";
require_once BASE_PROJET . '/src/_partials/menu.php';
?>
<div class="container">
    <h1 class="mt-4" style="border-bottom: solid; border-bottom-color: #86C232; color: #86C232">Connexion</h1>
</div>
<!-- Création d'un compte -->
<div class="container d-flex">
    <div class="w-50 mx-auto shadow my-5 p-4 rounded" style="background-color: skyblue">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="email_client" class="form-label">Email*</label>
                <input type="email"
                       class="form-control <?= (isset($erreurs['email_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="email_client"
                       name="email_client" value="<?= ($erreurs) ? "" : $email_client ?>"
                       placeholder="Saisir votre email"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['email_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['email_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="mdp_client" class="form-label">Mot de passe*</label>
                <input type="password"
                       class="form-control <?= (isset($erreurs['mdp_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="mdp_client" name="mdp_client"
                       value="<?= (!empty($erreurs)) ? $mdp_client : "" ?>" placeholder="Saisir votre mot de passe"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['mdp_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['mdp_client'] ?></p>
                <?php endif; ?>
            </div>
            <p>* Champs obligatoires</p>
            <div class="text-center">
                <button type="submit" class="btn btn-light ">Valider</button>
            </div>
            <p class="mt-3">Vous ne possédez pas de compte ? <a href="/inscription.php"
                                                                class="text-dark">inscrivez-vous</a>
            </p>
        </form>
    </div>
</div>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>