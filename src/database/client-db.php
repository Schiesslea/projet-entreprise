<?php

require_once '../base.php';
require_once BASE_PATH . '/src/config/db-config.php';

function getClient($email_client): array
{
    $pdo = getConnexion();
    $requete_email = $pdo->prepare("SELECT * FROM client WHERE email_client=?");
    $requete_email->execute([$email_client]);
    $client = $requete_email->fetchAll(PDO::FETCH_ASSOC);
    return $client;
}

function postClient($nom_client, $prenom_client, $adresse_client, $ville_client, $codepostal_client, $email_client, $pseudo_client, $mdp_client): void
{
    $pdo = getConnexion();
    $requete = $pdo->prepare(query: "INSERT INTO client (nom_client, prenom_client, adresse_client, ville_client, codepostal_client, email_client, pseudo_client, mdp_client) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $requete->bindParam(1, $nom_client);
    $requete->bindParam(2, $prenom_client);
    $requete->bindParam(3, $adresse_client);
    $requete->bindParam(4, $ville_client);
    $requete->bindParam(5, $codepostal_client);
    $requete->bindParam(6, $email_client);
    $requete->bindParam(7, $pseudo_client);
    $requete->bindParam(8, password_hash($mdp_client, PASSWORD_DEFAULT));

    // 3. Exécution de la requête
    $requete->execute();
}

function getMdp($email_client): array|bool
{
    $pdo = getConnexion();
    $requete_mdp = $pdo->prepare("SELECT mdp_client FROM client WHERE email_client=?");
    $requete_mdp->execute([$email_client]);
    $mdp = $requete_mdp->fetch(PDO::FETCH_ASSOC);
    return $mdp;
}

?>