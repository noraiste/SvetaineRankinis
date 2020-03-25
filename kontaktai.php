<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/kontaktai.php');
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

            <aside class="col spalva ">
                <h5 class=" paddingas">Klauskite</h5>
                <div class="row paddingas"> 
                    <form  action="email.php" method="post">
                        <input type="text" name="vardas" placeholder=" Jusu vardas"  value="" > <br>
                        <input type="text" name="pastas" placeholder=" Jusu email"  value="" > <br>
                        <input type="text" name="sritis" placeholder=" Sritis"     value="" > <br>
                        <textarea name="klausimas" rows="4" cols="40" placeholder=" Klausimai" ></textarea><br>
                        <input type="submit" value="Klausti" class="btn btn-dark">
                    </form>
                </div> <br>

                <div>
                <h4>LIETUVOS RANKINIO FEDERACIJA</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4613.963901427476!2d25.253956000000002!3d54.674746000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9477286ffc0d%3A0x91a359ce9ddeb068!2s%C5%BDemait%C4%97s%20g.%206%2C%20Vilnius%2003117!5e0!3m2!1sen!2slt!4v1584209704405!5m2!1sen!2slt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
             
            </aside>
        </div>
    </section>

<?php
include ("footer.php");
?>




    





