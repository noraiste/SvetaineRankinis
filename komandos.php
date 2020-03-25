   
<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/komandos.php');
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
                <div class="paddingas">
                    <?php
                        $visosKomandosOBJ =  getKomandos();
                        $komandos = mysqli_fetch_assoc($visosKomandosOBJ);
                        // print_r($komandos);
                        while($komandos) {
                        echo "<a class='komandos' href='page-doctor.php?sk=$komandos[ID]'>" . $komandos['ID'] . " " . $komandos['Pavadinimas'] . " " . $komandos['Miestas'] . "</a>" . "<hr>";
                        $komandos = mysqli_fetch_assoc($visosKomandosOBJ);
                        }
                    ?>
                </div>
            </aside>

        </div>
    </section>


<?php
include ("footer.php");
?>







    





