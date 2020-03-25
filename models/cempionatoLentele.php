<?php

// // prisijungimas prie duomenu bazes
// define('DB_HOST', 'localhost'); //define konstanta - nekintantis kintamasis
// define('DB_MYSQL_USER', 'root');
// define('DB_MYSQL_PASSWORD', 'root');  // Jei naudoji XAMP, WAMP 'root'-> ''
// define('DB_NAME', 'rankinis');

// $prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME, 3307);
// // jeigu MAMP'e pakeitet MYSQL porta is 3306 i kitoki, privalot ji nurodyti
// //$prisijungimas = mysqli_connect( $DB_HOST, $DB_MYSQL_USER, $DB_MYSQL_PASSWORD, $DB_NAME, 3307);

// if ($prisijungimas) {
//     // echo "pavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
   
// } else {
//     echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
// }
// function getPrisijungimas() {
//     // isvardini globalius kint. kuriuos nori naudoti f-jos viduje
//     global $prisijungimas; // !! sioje eilute, globaliu kint. negalima keisti, bet zemiau galima
//     return $prisijungimas;
// }

function deletecempionatoLentele($vieta) {
    $manoSQL = "DELETE FROM cempionatoLentele WHERE vieta = '$vieta'  LIMIT 1";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko atleisti gydytojo nr: $vieta <br>";
    }
}
// deleteDoctor(6); // test
/*
    i DB irasysim nauja gydytoja
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/
function createcempionatoLentele($vieta, $komanda, $taskai) {
    $manoSQL = "INSERT INTO  cempionatoLentele VALUES( '$vieta', '$komanda', '$taskai' )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti gydytojo vardas: $vieta, $komanda, $taskai <br>";
    }
}
// test
// createDoctor('Jurgis', 'Jurgaitis', 'A3');
// createDoctor('Tadas', 'Tadauskas',  'B2');


/*
    i DB irasysim nauja gydytoja
    $nr - id numeris DUomenu Bazeje
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/
function editcempionatoLentele($vieta, $komanda, $taskai) {
    $manoSQL = "UPDATE  cempionatoLentele SET
                                    komanda = '$komanda',
                                    taskai = '$taskai'
                                WHERE vieta = '$vieta'
                                LIMIT 1
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti gydytojo nr:$vieta, $komanda, $taskai <br>";
    }
}
// test
//editDoctor(4,'Litas', 'Litaite',  'Z2');

/*
   paima gydytoja is DB
   $nr - gydytojo id is DB
   return - (type: ARRAY)
*/
function getcempionatoLentele( $vieta ) {
    $manoSQL = "SELECT * FROM cempionatoLentele  WHERE vieta = '$vieta';  ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    // ar radom gydytoja
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r( $rezultataiOBJ ); // test
        // is Objekto paimam viena eilute ir paverciam i asociatyvu array
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        // print_r($resultARRAY); // test
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio gydytojo nera";
        return NULL;
    }

}
//test
// $gyd1 = getDoctor(1);
// print_r( $gyd1 );

function getcempionatoLenteleVisi() {
    $manoSQL = "SELECT * FROM cempionatoLentele   ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}

// $visiGydytojaiOBJ =  getDoctors();
// // is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
// $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
// // test
// // print_r($gydytojas1);
// //------------------
// while($gydytojas) {
//     echo "<h2>". $gydytojas['name']. $gydytojas['lname'] ."</h2>";
//     $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
// }
