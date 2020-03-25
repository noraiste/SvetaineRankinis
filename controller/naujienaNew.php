<?php
session_start();
include ('../models/prisijungimas.php');

include ('../models/naujienos.php');

$titel = $_GET['titel'];
$text = $_GET['text'];
$foto = $_GET['foto'];

createNaujiena($titel, $text, $foto);

$_SESSION['zinute'] = "naujiena ikelta";


// redirect - perkelimas i kita puslapi

header('Location:  ../adminFile.php');

exit();

?>