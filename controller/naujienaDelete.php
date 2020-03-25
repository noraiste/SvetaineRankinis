<?php
session_start();
include ('../models/prisijungimas.php');

include ('../models/naujienos.php');

$id = $_GET['id'];
deleteNaujiena($id);

$_SESSION['zinute'] = "naujiena istrinta";


// redirect - perkelimas i kita puslapi

header('Location:  ../adminFile.php');

exit();

?>