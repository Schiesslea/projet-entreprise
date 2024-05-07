<?php

require_once '../base.php';
require_once BASE_PATH . '/src/config/db-config.php';

function postDevis($id_client, $id_produit, $nom, $prenom, $telephone, $libelleRue, $ville, $codePostal, $pays): void
{
    $pdo = getConnexion();
    // Traiter les données
    // Traitement des données (insertion dans une base de données)
    $requete = $pdo->prepare(query: "INSERT INTO devis (id_client, id_produit, nom, prenom, telephone, libelleRue, ville, codePostal, pays) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $requete->bindParam(1, $id_client);
    $requete->bindParam(2, $id_produit);
    $requete->bindParam(3, $nom);
    $requete->bindParam(4, $prenom);
    $requete->bindParam(5, $telephone);
    $requete->bindParam(6, $libelleRue);
    $requete->bindParam(7, $ville);
    $requete->bindParam(8, $codePostal);
    $requete->bindParam(9, $pays);

    // 3. Exécution de la requête
    $requete->execute();

}

?>