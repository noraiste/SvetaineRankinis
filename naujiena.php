<?php
include ("header.php");
include ('models/prisijungimas.php');


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
                <?php
                include ('models/naujienos.php');
            

                $id = $_GET['nr'];
                $visosFotoOBJ =  getFotos($id);
                $foto = mysqli_fetch_assoc($visosFotoOBJ);
                // print_r($foto);
                // Array ( [naujienos_id] => 4 [id] => 4 [name] => deividas-virbauskas.jpg )
                while($foto) {
                    echo  "<img width='30%' src='img/$foto[name]' alt=''>";
                    $foto = mysqli_fetch_assoc($visosFotoOBJ);
                    // print_r($id);
                }

                $naujiena = getNaujiena( $id );
                echo "<h4>" . $naujiena['titel'] . "</h4>";
                echo "<p>".  $naujiena['text'] . "</p>";
                ?> 
            </div>

        </aside>

    </div>
</section>

<?php
include ("footer.php");
?>
