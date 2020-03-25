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
                <div class="col-2">
                    <p><a href='formNaujienaNauja.php' class='btn btn-success' role='button'>Naujas</a></p>
                </div>
                <div class="col">
                    <p> <?php echo "<p class='bg-warning'>". $_SESSION['zinute'] . "</p>";
                        $_SESSION['zinute'] = "";?>  
                    </p>
                </div>
                <div class="col">
                    <p> <?php echo "<a href='index.php' class='btn btn-primary btn-sm href='logout.php'>logout</a>";
                        ?>  
                    </p>
                </div>
            </div>
            
            <div class="row paddingas">
                <?php
                    
                    $visosNaujienosOBJ =  getNaujienosVisi();
                    $naujiena = mysqli_fetch_assoc($visosNaujienosOBJ);
                    while($naujiena) {
                        $string = $naujiena['text'];
                        echo "<div class='col-7'>" . 
                                    "<img width='30%' src='img/$naujiena[foto]' alt=''>" .
                                    "<h6>" . $naujiena['titel'] . "</h6>" . 
                            "</div>" . 
                                    
                            "<div class='col'>" . 
                                "<a href='controller/naujienaDelete-ajax.php?nr={$naujiena['id']}' id='btn-delete' class='btn btn-danger btn-sm' role='button'>Ištrinti Ajax</a>" . 
                                "<a href='controller/naujienaDelete.php?id={$naujiena['id']}' class='btn btn-danger btn-sm' role='button'>Ištrinti</a>" .
                                "<a href='formNaujienaUpdate.php?id={$naujiena['id']}' class='btn btn-info btn-sm' role='button'>Koreguoti</a>".  
                            "</div>";

                    $naujiena = mysqli_fetch_assoc($visosNaujienosOBJ);
                    }

                ?> 
            </div>
        </aside>
    </div>
</section>


<?php
include ("footer.php");
?>