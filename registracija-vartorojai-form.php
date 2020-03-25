<?php
include_once ("header.php");
include_once ('models/prisijungimas.php');
include_once ('models/vartotojai.php');
?>


  <section class="container  tarpas-apacia mt-2">
    <div class="row hight-col">

      <main class="col-3 spalva tarpas-desine bg-dark mr-2">
        <div class="row paddingas"> 
          <a href="komandos.php">Komandos</a>
        </div>
        <div class="row paddingas">
          <a href="tvarkarasciai.php">Tvarkarasciai</a>
        </div>
        <div class="row paddingas">
          <a href="cempionatoLentele.php">Čempionato lentelė</a>
        </div>

      </main>

      <aside class="col spalva">
        <div class="row paddingas">
           <div class="col border border-secondary pb-2">
           <h3> <?php echo "<p class='bg-warning'>". $_SESSION['zinute'] . "</p>"; ?> </h3>
            <h3>Registruotis</h3> <hr>
            <form action="controller/vartotojai-registracija.php" method="post">
              <input type="text" name="userName"  class="form-control" placeholder="Vartotojo vardas" required>
              <input type="email" name="email"  class="form-control" placeholder="El-pastas" required>
              <input type="password" name="password" class="form-control"  placeholder="Slaptazodis" required>
              <input type="password" name="password-repeat" class="form-control"  placeholder="Pakartoti slaptazodis" required>
              <input type="hidden" value="user" name="userType">
              <hr>
              <button type="submit"  class="btn btn-primary" > Registruotis </button>
             </form>
            </div>
          </div>
        </aside>
      </div>
  </section>

<?php
include ("footer.php");
?>




    






   



