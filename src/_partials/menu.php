<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-expand-md bg-light  " data-bs-theme="light">
        <div class="container-fluid ">
            <a class="navbar-brand " href="index.php"><img
                        src="assets/images/Schiesslé-Andy-SIO1-SLAM_logo-entreprise-removebg-preview.png" alt=""
                        height="100">MA VIDEO EDITOR</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse  " id="navbarText">
                <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php BASE_PROJET ?>/index.php#presentation">À
                            propos de
                            l'abonnement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php BASE_PROJET ?>/index.php#Organigramme">Organigramme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php BASE_PROJET ?>/index.php#contact">Contact</a>
                    </li>
                    <?php if (empty($_SESSION)) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php BASE_PROJET ?>/inscription.php">S'inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php BASE_PROJET ?>/connexion.php">Se connecter</a>
                        </li>
                    <?php else : ?>
                        <div class="btn-group dropdown" role="group">
                            <button type="button" class="btn btn-sm btn-primary  dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="bi bi-person-circle me-1 "></i><?= $client["pseudo_client"] ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-center">
                                <li><a class="dropdown-item" href="<?php BASE_PROJET ?>/deconnexion.php"><i
                                                class="bi bi-box-arrow-right me-1"></i>Déconnexion</a>
                                </li>
                                <li><a class="dropdown-item" href="<?php BASE_PROJET ?>/liste-devis.php"><i
                                                class="bi bi-tags me-1"></i>Mes devis</a>
                                </li>
                            </ul>
                        </div>
                    <?php endif ?>
                </ul>

            </div>
        </div>
    </nav>
</header>