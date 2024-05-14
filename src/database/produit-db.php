<?php

require_once '../base.php';
require_once BASE_PATH . '/src/config/db-config.php';

function getProduit(): array
{
    $pdo = getConnexion();
// 2. Préparation de la requête
    $requete = $pdo->prepare("SELECT * FROM produit");

// 3. Exécution de la requête
    $requete->execute();

// 4. Récupération des enregistrements
// Un enregistrement = un tableau associatif
    return $requete->fetchAll(PDO::FETCH_ASSOC);

}

function getProduitParId(?int $id_prod): array|bool
{
    $pdo = getConnexion();
// 2. Préparation de la requête
    $requete = $pdo->prepare("SELECT * FROM produit WHERE id_prod = :id");

// 3. Lier le paramètre
    $requete->bindValue(':id', $id_prod);

// 4. Exécution de la requête
    $requete->execute();

    return $requete->fetch(PDO::FETCH_ASSOC);
}

?>