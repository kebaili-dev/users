<?php

require 'functions.php';

$users = getUsers();

// $users = array_map(function ($item) {
//     $year = mt_rand(1950, 2000);
//     $month = mt_rand(1, 12);
//     $day = mt_rand(1, 28);
//     $item['birthdate'] = "$year-$month-$day";
//     return $item;
// }, $users);

// // Sérialisation
// $jsonData = json_encode($users);

// var_dump($jsonData);
// file_put_contents('users.json', $jsonData);

/* TODO
 *
 * Dans un fichier users.phtml, afficher tous les utilisateurs de mon tableau $users
 * dans un tableau html (<table>) (en utilisant la boucle foreach)
 * [BONUS] A la place de la date de naissance (ou dans une colonne en plus)
 * afficher l'âge de l'utilisateur parcouru
 */
 
// var_dump($users);

require 'users.phtml';