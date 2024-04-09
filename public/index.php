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
    <!-- card 1 -->
    <section id="tarifs" class="bg-light mt-5 mb-5">
        <h1 class="text-center">Tarifs</h1>
        <p class="text-center ">Choisir le plan adapté à votre besoin</p>
        <div class="container">

            <div class="row text-center ">
                <div class="col-lg-4 col-xl-4 p-0  ">
                    <div class="card text-lg-start  ">
                        <div class="card-body">
                            <h5 class="card-title">Plan mensuel </h5>
                            <p class="card-text"></p>
                            <h1 class="text-primary">9.99€/mois</h1>
                            <p class="d-lg-block d-none">Ayez accès au logiciel complet pour le mois</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                Acheter
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Payer le Plan
                                                Mensuel</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3">
                                                <div class="col-md-12">
                                                    <label for="inputEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail"
                                                           placeholder="name@gmail.com">
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputAdresse" class="form-label">Adresse</label>
                                                    <input type="text" class="form-control" id="inputAdresse"
                                                           placeholder="28 rue de l'Étang">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputVille" class="form-label">Ville</label>
                                                    <input type="text" class="form-control" id="inputVille"
                                                           placeholder="Besançon">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputRegion" class="form-label">Région</label>
                                                    <input type="text" class="form-control" id="inputRegion"
                                                           placeholder="Franche-Comté">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputNumCarte" class="form-label">Numéro de
                                                        carte</label>
                                                    <input type="number" class="form-control" id="inputNumCarte">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputState" class="form-label">Date de
                                                        péremption</label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 pt-2">
                                                    <label for="inputState" class="form-label"></label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                        <option>2027</option>
                                                        <option>2028</option>
                                                        <option>2029</option>
                                                        <option>2030</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputCryptogramme"
                                                           class="form-label">Cryptogramme</label>
                                                    <input type="number" class="form-control" id="inputCryptogramme">
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Vous acceptez les modalités de remboursement
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                    data-bs-dismiss="modal">Fermer
                                            </button>
                                            <button type="button" class="btn btn-outline-success"
                                                    data-bs-dismiss="modal">Payer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <!-- card 2 -->
                <div class="col-lg-4  col-xl-4 p-0 ">
                    <div class="card  text-lg-start   ">
                        <div class="card-body">
                            <h5 class="card-title">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     fill="none">
                                    <style>@keyframes rotate {
                                               0% {
                                                   transform: rotate(0)
                                               }
                                               to {
                                                   transform: rotate(360deg)
                                               }
                                           }</style>
                                    <rect width="16" height="16" x="4" y="4" stroke="#0A0A30" stroke-width="1.5"
                                          rx="8"/>
                                    <path stroke="#0A0A30" stroke-linecap="round" stroke-width="1.5"
                                          d="M12.021 12l2.325 2.325"/>
                                    <path stroke="#265BFF" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="1.5" d="M12.021 12V6.84"
                                          style="animation:rotate 2s linear infinite both;transform-origin:center"/>
                                </svg>
                                Plan annuel
                            </h5>
                            <p class="card-text rainbowText">
                                Offre limitée
                            </p>
                            <h1 class="text-primary"><span class="text-decoration-line-through">99.99€</span>49.99€/an
                            </h1>
                            <p class="d-lg-block d-none">Ayez accès au logiciel complet pour l'année</p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop2">
                                Acheter
                            </button>
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Payer le Plan
                                                Annuel</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3">
                                                <div class="col-md-12">
                                                    <label for="inputEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail"
                                                           placeholder="name@gmail.com">
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputAdresse" class="form-label">Adresse</label>
                                                    <input type="text" class="form-control" id="inputAdresse"
                                                           placeholder="28 rue de l'Étang">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputVille" class="form-label">Ville</label>
                                                    <input type="text" class="form-control" id="inputVille"
                                                           placeholder="Besançon">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputRegion" class="form-label">Région</label>
                                                    <input type="text" class="form-control" id="inputRegion"
                                                           placeholder="Franche-Comté">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputNumCarte" class="form-label">Numéro de
                                                        carte</label>
                                                    <input type="number" class="form-control" id="inputNumCarte">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputState" class="form-label">Date de
                                                        péremption</label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 pt-2">
                                                    <label for="inputState" class="form-label"></label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                        <option>2027</option>
                                                        <option>2028</option>
                                                        <option>2029</option>
                                                        <option>2030</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputCryptogramme"
                                                           class="form-label">Cryptogramme</label>
                                                    <input type="number" class="form-control" id="inputCryptogramme">
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Vous acceptez les modalités de remboursement
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                    data-bs-dismiss="modal">Fermer
                                            </button>
                                            <button type="button" class="btn btn-outline-success"
                                                    data-bs-dismiss="modal">Payer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="col-lg-4 col-xl-4 p-0   ">
                    <div class="card text-lg-start ">
                        <div class="card-body">
                            <h5 class="card-title">Plan perpétuel</h5>
                            <p class="card-text"></p>
                            <h1 class="text-primary">149.99€</h1>
                            <p class="d-lg-block d-none">Ayez accès au logiciel complet à vie </p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop3">
                                Acheter
                            </button>
                            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Payer le Plan
                                                Perpétuel</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3">
                                                <div class="col-md-12">
                                                    <label for="inputEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail"
                                                           placeholder="name@gmail.com">
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputAdresse" class="form-label">Adresse</label>
                                                    <input type="text" class="form-control" id="inputAdresse"
                                                           placeholder="28 rue de l'Étang">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputVille" class="form-label">Ville</label>
                                                    <input type="text" class="form-control" id="inputVille"
                                                           placeholder="Besançon">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputRegion" class="form-label">Région</label>
                                                    <input type="text" class="form-control" id="inputRegion"
                                                           placeholder="Franche-Comté">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputNumCarte" class="form-label">Numéro de
                                                        carte</label>
                                                    <input type="number" class="form-control" id="inputNumCarte">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputState" class="form-label">Date de
                                                        péremption</label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 pt-2">
                                                    <label for="inputState" class="form-label"></label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                        <option>2027</option>
                                                        <option>2028</option>
                                                        <option>2029</option>
                                                        <option>2030</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputCryptogramme"
                                                           class="form-label">Cryptogramme</label>
                                                    <input type="number" class="form-control" id="inputCryptogramme">
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Vous acceptez les modalités de remboursement
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                    data-bs-dismiss="modal">Fermer
                                            </button>
                                            <button type="button" class="btn btn-outline-success"
                                                    data-bs-dismiss="modal">Payer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Partie retouche photo
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Doté d'une interface intuitive et d'une large gamme d'outils puissants, il est
                                        parfait pour les débutants comme pour les professionnels.<br>

                                        Fonctionnalités clés :<br>

                                        Retouche automatique : Améliorez instantanément vos photos en un seul clic avec
                                        la fonction de retouche automatique.
                                        <br>
                                        Outils de correction : Corrigez les imperfections, les yeux rouges et la balance
                                        des blancs avec précision.
                                        <br>
                                        Filtres et effets : Appliquez des filtres et effets créatifs pour donner à vos
                                        photos une allure unique.
                                        <br>
                                        Outils de création : Ajoutez du texte, des formes et des images pour créer des
                                        compositions originales.
                                        <br>
                                        Partage facile : Partagez vos photos retouchées sur vos réseaux sociaux
                                        préférés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Partie montage vidéo
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Doté d'une interface intuitive et d'une large gamme d'outils puissants, il est
                                        parfait pour les débutants comme pour les professionnels.
                                        <br>

                                        Fonctionnalités clés : <br>

                                        Montage intuitif : Importez vos vidéos et assemblez-les facilement grâce à
                                        l'interface intuitive de type "glisser-déposer".
                                        <br>
                                        Transitions et effets : Ajoutez des transitions et effets professionnels pour
                                        donner à vos vidéos une allure unique.
                                        <br>
                                        Outils de correction : Corrigez la couleur, la balance des blancs et le son de
                                        vos vidéos.
                                        <br>
                                        Titres et génériques : Ajoutez des titres, des génériques et des incrustations
                                        de texte à vos vidéos.
                                        <br>
                                        Partage facile : Exportez vos vidéos dans différents formats et partagez-les sur
                                        vos réseaux sociaux préférés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Partie création d'effets spéciaux
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Doté d'une interface intuitive et d'une large gamme d'outils puissants, il est
                                        parfait pour les débutants comme pour les professionnels.
                                        <br>

                                        Fonctionnalités clés : <br>

                                        Effets visuels réalistes : Créez des explosions, des flammes, des créatures
                                        fantastiques et bien plus encore avec des effets visuels de qualité cinéma.
                                        <br>
                                        Outils de compositing : Superposez plusieurs couches d'images et de vidéos pour
                                        créer des compositions complexes.
                                        <br>
                                        Animation 3D : Ajoutez des personnages et des objets 3D animés à vos vidéos.
                                        <br>
                                        Suivi de mouvement : Intégrez vos effets spéciaux de manière fluide et réaliste
                                        à vos séquences vidéo.
                                        <br>
                                        Tutoriels et exemples : Apprenez à utiliser les outils du logiciel grâce à des
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
            <a class="nav-link" data-bs-toggle="tab" href="#profile" aria-selected="false" role="tab" tabindex="-1">Fiches
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
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
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
                            <a href="assets/images/luigi_daniel.pdf" target="_blank" class="btn btn-outline-info  ">Fiche
                                de poste de Luigi Daniel</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/marie-dupont.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <a href="assets/images/marie_dupont.pdf" target="_blank" class="btn btn-outline-info">Fiche
                                de poste de Marie Dupont</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/alban-parizot.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <a href="assets/images/alban_parizot.pdf" target="_blank" class="btn btn-outline-info">Fiche
                                de poste d'Alban Parizot</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/cecile-alteriet.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <a href="assets/images/cecile_alteriet.pdf" target="_blank"
                               class="btn btn-outline-info ">Fiche de poste de Cécile Alteriet</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions"
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