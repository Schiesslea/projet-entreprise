<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/produit-db.php';
session_start();
$client = null;
if (isset($_SESSION["client"])) {
    $client = $_SESSION["client"];
}

$produits = getProduit();

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
<main>
    <!-- Présentation -->
    <section id="presentation">
        <div class="container">
            <div class="position-fixed bottom-0 end-0 p-3 z-3 ">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">MA VIDEO EDITOR</strong>
                        <small>À l'instant</small>
                        <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="toast-body">
                        <a href="#tarifs">
                            <div class="spinner-border spinner-border-sm text-primary me-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            Une offre est limitée jusqu'à la fin de semaine !</a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-5 col-xl-5 text-md-start pt-5">
                    <h1 class="">MA VIDEO EDITOR</h1>
                    <h2 class="pt-2">MA VIDEO EDITOR, seulement si vous voulez ce qu’il y a de mieux</h2>
                    <p class="pt-3 pb-2">MA VIDEO EDITOR est un logiciel de montage photos et vidéos. Ce logiciel
                        comprend une partie pour la retouche photo, une partie pour le montage vidéo et une partie pour
                        réaliser des effets spéciaux.</p>
                    <a href="#tarifs">
                        <button type="button" class="btn btn-outline-primary pt">Acheter maintenant</button>
                    </a>
                </div>
                <div class="col-md-7 col-xl-7 float-end  ">
                    <img src="assets/images/Schiesslé-Andy-SIO1-SLAM_logo-entreprise-removebg-preview.png"
                         class="d-md-block d-none w-50" alt="...">
                </div>
            </div>
    </section>

    <!-- Tarifs -->
    <!-- cards -->
    <section id="tarifs" class="bg-light mt-5 mb-5">
        <h1 class="text-center">Tarifs</h1>
        <p class="text-center ">Choisir le plan adapté à votre besoin</p>
        <div class="container">
            <div class="row text-center " href="#home">
                <?php foreach ($produits as $produit) : ?>
                    <div class="col-lg-4 col-xl-4 p-0  ">
                        <div class="card rounded-4  mb-4 me-2">
                            <div class="card-body ">
                                <h4 class="card-title"><?= $produit["designation_prod"] ?></h4>
                                <p class="card-text fs-3 "><?= $produit["prix_prod"] ?>€</p>
                                <p class="fs-5 d-lg-block d-none"> <?= $produit["commentaire_prod"] ?></p>
                                <a class="btn btn-light " <?php if (empty($_SESSION)) :
                                    ?>
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"
                                <?php endif; ?>
                                   href="devis.php">Acheter</a>
                                <?php if (empty($_SESSION)) :
                                    ?>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                         aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Attention</h1>
                                                    <button type="button" class="btn-close " data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Vous devez être connecté pour pouvoir acheter un abonnement</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!--    contenu-->
    <section id="contenu">
        <h1 class="text-center">Que propose le logiciel ?</h1>
        <p class="text-center text-secondary">Regarder comment marche nos fonctionnalités</p>
        <div class="container text-center ">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-4   ">
                    <img src="assets/images/editing-1141505_640.jpg" class=" w-75 " alt="...">
                </div>
                <div class="col-lg-6 col-xl-6  ">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                    Partie retouche photo
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Doté d'une interface intuitive et d'une large gamme d'outils
                                        puissants, il est
                                        parfait pour les débutants comme pour les professionnels.<br>

                                        Fonctionnalités clés :<br>

                                        Retouche automatique : Améliorez instantanément vos photos en un
                                        seul clic avec
                                        la fonction de retouche automatique.
                                        <br>
                                        Outils de correction : Corrigez les imperfections, les yeux rouges
                                        et la balance
                                        des blancs avec précision.
                                        <br>
                                        Filtres et effets : Appliquez des filtres et effets créatifs pour
                                        donner à vos
                                        photos une allure unique.
                                        <br>
                                        Outils de création : Ajoutez du texte, des formes et des images pour
                                        créer des
                                        compositions originales.
                                        <br>
                                        Partage facile : Partagez vos photos retouchées sur vos réseaux
                                        sociaux
                                        préférés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed " type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                    Partie montage vidéo
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Doté d'une interface intuitive et d'une large gamme d'outils
                                        puissants, il est
                                        parfait pour les débutants comme pour les professionnels.
                                        <br>

                                        Fonctionnalités clés : <br>

                                        Montage intuitif : Importez vos vidéos et assemblez-les facilement
                                        grâce à
                                        l'interface intuitive de type "glisser-déposer".
                                        <br>
                                        Transitions et effets : Ajoutez des transitions et effets
                                        professionnels pour
                                        donner à vos vidéos une allure unique.
                                        <br>
                                        Outils de correction : Corrigez la couleur, la balance des blancs et
                                        le son de
                                        vos vidéos.
                                        <br>
                                        Titres et génériques : Ajoutez des titres, des génériques et des
                                        incrustations
                                        de texte à vos vidéos.
                                        <br>
                                        Partage facile : Exportez vos vidéos dans différents formats et
                                        partagez-les sur
                                        vos réseaux sociaux préférés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Partie création d'effets spéciaux
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Doté d'une interface intuitive et d'une large gamme d'outils
                                        puissants, il est
                                        parfait pour les débutants comme pour les professionnels.
                                        <br>

                                        Fonctionnalités clés : <br>

                                        Effets visuels réalistes : Créez des explosions, des flammes, des
                                        créatures
                                        fantastiques et bien plus encore avec des effets visuels de qualité
                                        cinéma.
                                        <br>
                                        Outils de compositing : Superposez plusieurs couches d'images et de
                                        vidéos pour
                                        créer des compositions complexes.
                                        <br>
                                        Animation 3D : Ajoutez des personnages et des objets 3D animés à vos
                                        vidéos.
                                        <br>
                                        Suivi de mouvement : Intégrez vos effets spéciaux de manière fluide
                                        et réaliste
                                        à vos séquences vidéo.
                                        <br>
                                        Tutoriels et exemples : Apprenez à utiliser les outils du logiciel
                                        grâce à des
                                        tutoriels et exemples complets. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!--    Organigramme-->
    <ul class="nav nav-tabs bg-dark-subtle" role="tablist">
        <li class="nav-item mx-auto" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true"
               role="tab">Organigramme</a>
        </li>
        <li class="nav-item mx-auto" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#profile" aria-selected="false" role="tab"
               tabindex="-1">Fiches
                de poste</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content ">
        <div class="tab-pane fade active show" id="home" role="tabpanel">
            <section id="Organigramme" class="bg-light text-center">
                <h1>Organigramme de la société</h1>
                <img src="assets/images/organigramme-photo.png" class="w-75" alt="">
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel">
            <!-- Fiche de poste -->
            <div id="carouselExampleCaptions" class="carousel carousel-dark w-75 mx-auto slide ">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/luigi-daniel.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <a href="assets/fiche_de_poste/luigi_daniel.pdf" target="_blank"
                               class="btn btn-outline-info  ">Fiche
                                de poste de Luigi Daniel</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/marie-dupont.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <a href="assets/fiche_de_poste/marie_dupont.pdf" target="_blank"
                               class="btn btn-outline-info">Fiche
                                de poste de Marie Dupont</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/alban-parizot.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <a href="assets/fiche_de_poste/alban_parizot.pdf" target="_blank"
                               class="btn btn-outline-info">Fiche
                                de poste d'Alban Parizot</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/cecile-alteriet.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <a href="assets/fiche_de_poste/cecile_alteriet.pdf" target="_blank"
                               class="btn btn-outline-info ">Fiche de poste de Cécile Alteriet</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


</main>
<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>