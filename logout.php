<?php

session_start();
session_destroy();
if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {

$email = $_COOKIE['email'];
$pass = $_COOKIE['password'];

setcookie('email', $email, time() -1); 
setcookie('password', $pass, time() -1); 

}
echo "jus atsijungete nuo paskyros";

// unset($_SESSION['zinute']);
// $_SESSION['zinute'] = "jus atsijungete nuo paskyros";

header('location:../prisijungimas-vartorojai-form.php');

?>