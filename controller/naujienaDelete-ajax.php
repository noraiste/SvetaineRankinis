<?php
session_start();
include_once ('../models/prisijungimas.php');
include_once ('../models/naujienos.php');

$nr = $_GET['nr'];
deleteNaujiena($nr);

// echo json_encode($naujiena);

$_SESSION['zinute'] = "naujiena istrinta";

header('Location:  ../adminFile.php');

exit();