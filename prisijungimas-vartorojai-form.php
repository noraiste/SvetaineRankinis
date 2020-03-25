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
            <h3>Prisijungti</h3><hr>
            <form action="controller/vartotojai-prisijungimas.php" method="post">
              <input type="text" name="email" id="email" class="form-control" placeholder="El pastas" required> 
              <input type="password" name="password" id="pass"  class="form-control"  placeholder="Slaptazodis" required> 
              <select class="form-control"  name="userType" id="" required>
                <option value="user" >User</option>
                <option value="admin" >Admin</option>
              </select><br>
              <!-- <tr><td><input type="checkbox" name="remember">Isiminti</td></tr> <hr> -->
              <button type="submit"  class="btn btn-primary" name="login"> Go !!! </button>
             </form>
            </div>
          </div>
        </aside>
      </div>
  </section>

<?php
include ("footer.php");
?>




    






   



