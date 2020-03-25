<?php

session_start();
include ('../models/prisijungimas.php');

include ('../models/naujienos.php');

$id = $_GET['id'];
$titel = $_GET['titel'];
$text = $_GET['text'];
$foto = $_GET['foto'];

// print_r($_GET);

editNaujiena($id, $titel, $text, $foto);


$_SESSION['zinute'] = "naujiena pavyko koreguoti";


// redirect - perkelimas i kita puslapi

header('Location:  ../adminFile.php');

exit();

?>
