<?php
//ini_set('xdebug.var_display_max_depth', 99);
var_dump('BIENVENU SUR LE PROJET DOCKER SIMPLE');
var_dump('NOUS SOMMES DANS LE FICHIER INDEX.PHP, N\'HESITEZ PAS A LE FORMATER A VOTRE SAUCE.');

/**
 * La base de donnée est créé automatiquement.
 * Ne pas oublier d'aller sur phpmyadmin pour créer les tables.
 */
//$mysqli = new mysqli("db", "root", "root", "appsama");
//
//$sql = 'SELECT * FROM utilisateurs ORDER BY id';
//$result = $mysqli->query($sql);
//if ($result = $mysqli->query($sql)) {
//    while ($data = $result->fetch_object()) {
//        $users[] = $data;
//    }
//}

//var_dump($users);

/**
 * Désactiver les commentaires pour executer le code ci-dessous
 * Simple hash sur demande
 */
//$selection = 'aligator';
//$hash = password_hash($selection, PASSWORD_DEFAULT);
//var_dump('Mot de passe à donner à l\'utilisateur: '. $selection, 'Pour la BDD: '. $hash);


/**
 * Désactiver les commentaires pour executer le code ci-dessous
 * Générer un mot de passe de 6 caractères aléatoire
 * Charger la page pour lancer l'action
 */
//$chaine = 'abBDEFcdefghijkmnPQRSTUVWXYpqrst23456789&#@()=-+';
//$pwd = '';
//$nombreDeCaractere = 6;
//
//srand((double)microtime()*1000000);
//for($i = 0; $i < $nombreDeCaractere; $i++)
//{
//    $pwd .= $chaine[rand()%strlen($chaine)];
//}
//
//$hash = password_hash($pwd, PASSWORD_DEFAULT);
//var_dump('Mot de passe à donner à l\'utilisateur: '. $pwd, 'Pour la BDD: '. $hash);


