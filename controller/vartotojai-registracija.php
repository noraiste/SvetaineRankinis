<?php
include_once ('../models/prisijungimas.php');
include_once ('../models/vartotojai.php');

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];
$userType = $_POST['userType'];
$userName = $_POST['userName'];
$pass2 = $_POST['password-repeat'];


createVartotojas($email, $pass, $id, $userType, $userName, $pass2);

header('Location:  ../index.php');

exit();