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

                  <form action="controller/naujienaNew.php" method="get">

                     <input type="text" name="titel" placeholder="titel"> <hr>

                     <textarea name="text" id="" cols="100" rows="10" placeholder="text" ></textarea> <hr>

                     <input type="text" name="foto" placeholder="foto"> <hr>

                     <button type="submit"> Kurti </button>
                  </form>

            

               </div>
               <div class="row paddingas"></div>
            </aside>
        </div>
    </section>

<?php
include ("footer.php");
?>




    






   



