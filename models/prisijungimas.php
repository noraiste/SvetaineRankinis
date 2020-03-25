<?php
// prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //define konstanta - nekintantis kintamasis
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');  // Jei naudoji XAMP, WAMP 'root'-> ''
define('DB_NAME', 'rankinis');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME, 3307);
// jeigu MAMP'e pakeitet MYSQL porta is 3306 i kitoki, privalot ji nurodyti
//$prisijungimas = mysqli_connect( $DB_HOST, $DB_MYSQL_USER, $DB_MYSQL_PASSWORD, $DB_NAME, 3307);

if ($prisijungimas) {
    // echo "pavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
   
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
}
function getPrisijungimas() {
    // isvardini globalius kint. kuriuos nori naudoti f-jos viduje
    global $prisijungimas; // !! sioje eilute, globaliu kint. negalima keisti, bet zemiau galima
    return $prisijungimas;
}