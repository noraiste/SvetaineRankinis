<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/tvarkarasciai.php');
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
              <div class="col">
                <table class="table table-striped table-dark">
                    <thead class="">
                    <tr>
                        <th scope="col">Nr</th>
                        <th scope="col">Data</th>
                        <th scope="col">Sale</th>                    
                        <th scope="col">Komandos</th>
                        <th scope="col">Rezultatas</th>

                        <!-- <th scope="col">Rezultatas</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        <?php $visosKomandosOBJ =  getTvarkarasciaiVisi();
                        $komandos = mysqli_fetch_assoc($visosKomandosOBJ);
                        while($komandos) {
                        echo "<tr><th scope='row'>" . $komandos['ID'] . "<td>" . $komandos['data'] . "</td>" . "<td>" . $komandos['sale'] . "</td>" . "<td>" . $komandos['komandos'] . "</td>" . "<td>" . $komandos['rezultatas'] . "</td>" . "</th></tr>"; 
                        $komandos = mysqli_fetch_assoc($visosKomandosOBJ);} ?>
                    </tbody>
                    </table>
                 </div>
            </div>
      </aside>

      </div>
    </section>



<?php
include ("footer.php");
?>




    





