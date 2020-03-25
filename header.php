<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap linkas -->
    
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    
    <title></title>

    <!-- mano CSS failas turi buti VISADA zemiau nei kiti CSS failai
    todel lengviau butu, jei mano CSS failas butu po TITLE -->

    <link rel="stylesheet" href="css/master.css">
</head>
<body>
<?php

session_start();

?>
<nav class="container navbar navbar-expand-lg navbar-dark bg-dark">

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Pradžia <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="kontaktai.php">Kontaktai <span class="sr-only">(current)</span></a>
    </li> 
  </ul>

    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      <input class="input-group input-group-sm mr-sm-2 " type="text" placeholder="Ieskoti" aria-label="Search" name="search">
      <button class="btn btn-outline-success btn-sm my-2 my-sm-0 mr-sm-2" type="submit" name="search-btn">Ieskoti</button>
    </form>
    <form action="prisijungimas-vartorojai-form.php">
      <input class="btn btn-success btn-sm my-2 my-sm-0 mr-sm-2" type="submit" value="Prisijungti" method="post">
    </form>

    <?php 
    if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
      $email = $_COOKIE['email'];
      $pass = $_COOKIE['password'];
      echo "<script>
        document.getElementById('email').value = '$email';
        document.getElementById('pass').value = '$pass';
      </script>";
    }
    ?>
    <form action="registracija-vartorojai-form.php">
      <input class="btn btn-info btn-sm my-2 my-sm-0 mr-sm-2" type="submit" value="Registruotis" method="post">
    </form>
    



    <div>
      <div> 
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">  <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">  <span class="sr-only">(current)</span></a>
          </li>
        </ul>  
        <button id="dark-mode-toggle" class="dark-mode-toggle">
        <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496"><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>
      </button>
      </div>

    </div>
     

</div>
</nav>