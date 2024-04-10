<?php
session_start();
$client = null;
if (isset($_SESSION["client"])) {
    $client = $_SESSION["client"];
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
    <title>Formulaire</title>
    <link rel="shortcut icon" href="assets/images/Schiesslé-Andy-SIO1-SLAM_logo-entreprise-removebg-preview.png">
</head>
<body id="style-3">
<?php require_once "../base.php";
require_once BASE_PROJET . '/src/_partials/menu.php';
?>

<div class="container">
    <h1 class="text-center mt-3">Vous voulez nous poser une question ?</h1>
    <p class="text-center mb-5">Il suffit de remplir ce formulaire </p>
    <div class="mb-3 w-75 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Adresse mail</label>
        <div class="input-group">
            <div class="input-group-text">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                    <style>@keyframes open {
                               0% {
                                   transform: translateX(10px) scale(0);
                                   transform-origin: 50% 100%
                               }
                               to {
                                   transform: scale(1);
                                   transform-origin: 50% 100%
                               }
                           }</style>
                    <rect width="12" height="10" x="6" y="8.804" stroke="#0A0A30" stroke-width="1.5" rx="2"/>
                    <path fill="#fff" stroke="#265BFF" stroke-width="1.5"
                          d="M9 6.196a1 1 0 011-1h4a1 1 0 011 1v5.082a1 1 0 01-.37.777l-2.006 1.628a1 1 0 01-1.263-.002l-1.993-1.626A1 1 0 019 11.28V6.196z"
                          style="animation:open 2s cubic-bezier(.49,.39,.35,1.06) both infinite"/>
                    <path stroke="#0A0A30" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="M8.465 11.413l3.573 2.783 3.497-2.783"/>
                </svg>
            </div>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    </div>


    <div class="mb-3 w-75 mx-auto">
        <select class="form-select" aria-label="Default select example">
            <option>Le sujet de votre question</option>
            <option value="1">Sur le montage vidéo</option>
            <option value="2">Sur la retouche photo</option>
            <option value="3">Sur la création d'effets spéciaux</option>
            <option value="4">Autre</option>
        </select>
        <label for="exampleFormControlTextarea1" class="form-label">Votre question</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="13"></textarea>
        <button class="btn btn-outline-primary mt-3  ">Envoyer</button>
    </div>

</div>
<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>