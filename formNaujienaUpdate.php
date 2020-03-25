<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/naujienos.php');
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

            $id = $_GET['id'];
            $naujiena = getNaujiena( $id );

            ?> 
              <form action="controller/naujienaUpdate.php" method="get">

                <textarea name="titel" id="" cols="100" rows="3" placeholder="titel" >
                <?php echo $naujiena['titel'] ?> </textarea> <hr>

                <textarea name="text" id="" cols="100" rows="10" placeholder="text" >
                <?php echo $naujiena['text'] ?> </textarea> <hr>

                <textarea name="foto" id="" cols="100" rows="1" placeholder="foto" >
                <?php echo $naujiena['foto'] ?> </textarea> <hr>

                <input type="hidden" value=" <?php echo $naujiena['id'] ?>" name="id">
                <button type="submit"> Saugoti </button>
              </form>

            </div>
          <div class="row paddingas"></div>
        </aside>
      </div>
    </section>


<?php
include ("footer.php");
?>




    






   



