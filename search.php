<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/naujienos.php');
?>


<section class="container tarpas-apacia mt-2">
    <div class="row hight-col">

        <main class="col-3 spalva tarpas-desine bg-dark mr-2">
            <div class="row paddingas"> 
                <a href="komandos.php">Komandos</a>
            </div>
            <div class="row paddingas">
                <a href="tvarkarasciai.php">Tvarkarasciai ir rezultatai</a>
            </div>
            <div class="row paddingas">
                <a href="cempionatoLentele.php">Čempionato lentelė</a>
            </div>
            </main>

        <aside class="col spalva">
            <h1> Paieskos rezultatai</h1>
            <div class="row">  
                <?php 
                    if (isset($_POST['search-btn'])) {
                        $search = mysqli_real_escape_string(getPrisijungimas(), $_POST['search']);
                        $sql = "SELECT * FROM naujienos WHERE titel LIKE '%$search%' OR text LIKE '%$search%'";
                        $result = mysqli_query(getPrisijungimas(),$sql);
                        $queryResult = mysqli_num_rows($result);

                        echo "<h4 class='text-info paddingas'>" . "Rasta straipsiu - " . $queryResult . "</h4>";

                        if ($queryResult > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {  
                            echo "<div>" . "<h5>" . $row['titel'] . "</h5>" . 
                            "<p><a href='naujiena.php?nr={$row['id']}' class='btn btn-outline-dark btn-sm' role='button'>Plačiau</a> </p>" . "<div>";
                        }
                        } 
                    }
                
                ?>
            </div>


            </aside>

        </div>
    </section>

<?php
include ("footer.php");
?>