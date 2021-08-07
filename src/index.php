<?php
//ini_set('xdebug.var_display_max_depth', 99);
$mysqli = new mysqli("db", "root", "root", "app");

$sql = 'SELECT * FROM nego WHERE idnego = 10000028
    OR idnego = 10000159
    OR idnego = 10000115
    OR idnego = 14
    OR idnego = 10000154
    OR idnego = 1114
    OR idnego = 10000152
    OR idnego = 10000127
    OR idnego = 10000041
    OR idnego = 10000125
    OR idnego = 1014
    OR idnego = 10000001
    OR idnego = 1116
    OR idnego = 10000126
    OR idnego = 10000083
    OR idnego = 10000089
    OR idnego = 10000092
    OR idnego = 10000014
    OR idnego = 10000153
    OR idnego = 10000143
    OR idnego = 10000146
    OR idnego = 536
    OR idnego = 10000054
    OR idnego = 10000142
    OR idnego = 10000156
    OR idnego = 10000119
    OR idnego = 233
    OR idnego = 10000059
    OR idnego = 10000138';
$result = $mysqli->query($sql);
if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

var_dump($users);
//foreach ($users as $user) {
////    var_dump($user->amdp);
//    $hash = password_hash($user->amdp, PASSWORD_DEFAULT);
//    $ok = $mysqli->query("UPDATE nego SET mdp= '".$hash."' WHERE idnego = ".(+$user->idnego)." ");
//    var_dump((+$user->idnego) .': '.$user->amdp .' => '. password_hash($user->amdp, PASSWORD_DEFAULT));
//}
//$ok = $mysqli->query("UPDATE nego SET mdp= '57YtZ63' WHERE idnego = 14");
//var_dump($ok);

//var_dump(password_hash('123', PASSWORD_DEFAULT));
//echo '<pre>';
//echo '</pre>';

