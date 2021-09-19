<?php
//ini_set('xdebug.var_display_max_depth', 99);

/**
 * Créer un base de données à part avant de procéder
 */
$mysqli = new mysqli("db", "root", "root", "appv2");

$sql = 'SELECT * FROM utilisateurs ORDER BY id';
$result = $mysqli->query($sql);
if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

//var_dump($users);
/**
 * Simple hash sur demande
 */
//$hash = password_hash('bPK@u13', PASSWORD_DEFAULT);
//var_dump($hash);

/**
 * Hash les mots de passe reçut et me donne la requete
 * Charger la page pour lancer l'action
 * Désactiver les commentaires pour charger l'action
 */
//foreach ($users as $user) {
//    $hash = password_hash($user->amdp, PASSWORD_DEFAULT);
//    $ok = $mysqli->query("UPDATE utilisateurs SET mdp= '".$hash."' WHERE id = ".(+$user->id)." ");
////    var_dump((+$user->id) .': '.$user->amdp .' => '. $hash);
//    var_dump("UPDATE utilisateurs SET utilisateurs.password = $hash WHERE id = $user->id");
//}

/**
 * Générer un mot de passe à la Thierry
 * Charger la page pour lancer l'action
 * Désactiver les commentaires pour charger l'action
 */
//$motpass= '';
//$chaine = 'abBDEFcdefghijkmnPQRSTUVWXYpqrst23456789';
//srand((double)microtime()*1000000);
//for($i=0; $i<6; $i++)
//{
//    $motpass .= $chaine[rand()%strlen($chaine)];
//}
//var_dump($motpass);


