<?php

function getAge(string $birthdate): int
{
    // Récupération d'un objet DateTime de la date du jour
    $now = date_create();
    // $now = new DateTime();
    
    // Récupération d'un objet DateTime correspondant à la date de naissance
    $date = date_create($birthdate);
    // $date = new DateTime($birthdate);
    
    // Calcul de l'intervalle entre les deux dates
    $interval = $now->diff($date);
    
    // On renvoie le nombre d'années de cet intervalle
    return $interval->y;
}

function getUsers(): array
{
    // On récupère le contenu du fichier JSON contenant les utilisateurs que l'on va afficher
    $jsonFile = file_get_contents('users.json');
    
    // Désérialisation : on convertit les données au format JSON en tableau PHP
    return json_decode($jsonFile, true);
}

function send404(): void
{
    // On précise au navigateur qu'il s'agit d'une erreur http 404
    header("HTTP/1.0 404 Not Found");
    
    // On affiche le contenu de la page 404
    require '404.php';
    exit();
}