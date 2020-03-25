<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/cempionatoLentele.php');
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
              <div class="col-1"></div>
              <div class="col">
              <table class="table table-striped table-dark">
            <thead class="">
                <tr>
                    <th scope="col">Vieta</th>
                    <th scope="col">Komanda</th>
                    <th scope="col">Taskai</th>
                </tr>
            </thead>
            <tbody>
                        <?php $cempionatoLenteleOBJ =  getcempionatoLenteleVisi();
                        $cempionatoLentele = mysqli_fetch_assoc($cempionatoLenteleOBJ);
                        while($cempionatoLentele) {
                        echo "<tr><th scope='row'>" . $cempionatoLentele['vieta'] . "<td>" . $cempionatoLentele['komanda'] . "</td>" . "<td>" . $cempionatoLentele['taskai'] . "</td>" . "</th></tr>"; 

                        $cempionatoLentele = mysqli_fetch_assoc($cempionatoLenteleOBJ);
                        }?>
                </tbody>
            </table>
              </div>
              <div class="col-1"></div>
          </div>
      </aside>

      </div>
    </section>


<?php
include ("footer.php");
?>