<?php
include_once ('../models/prisijungimas.php');
include_once ('../models/vartotojai.php');
session_start();


if (isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rem = $_POST['remember'];
    prisijungimasVartotojas($email, $pass);

} else {
    header("location:../prisijungimas-vartorojai-form.php");
}
