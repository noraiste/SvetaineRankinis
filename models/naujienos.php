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

function deleteNaujiena($nr) {
    $manoSQL = "DELETE FROM naujienos WHERE id = '$nr'  LIMIT 1";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko atleisti gydytojo nr: $nr <br>";
    }
}
// deleteDoctor(6); // test
/*
    i DB irasysim nauja gydytoja
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/
function createNaujiena($titel, $text, $foto) {
    $manoSQL = "INSERT INTO  naujienos VALUES( NULL, '$titel', '$text', '$foto' )";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti: $titel, $text, $foto <br>";
    }
}

function getFotos($id) {
    $manoSQL = "SELECT fotos.naujienos_id, fotos.id, fotos.name FROM fotos INNER JOIN naujienos ON fotos.naujienos_id = naujienos.id WHERE naujienos.id = $id";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti: $id <br>";
    }
    return $rezultatas;
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
function editNaujiena($id, $titel, $text, $foto) {
    $manoSQL = "UPDATE  naujienos SET
                                    titel = '$titel',
                                    text = '$text',
                                    foto = '$foto'
                                WHERE id = '$id'
                                LIMIT 1
                ";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti gydytojo nr: $id, $titel, $text, $foto <br>";
    }
}
// test
//editDoctor(4,'Litas', 'Litaite',  'Z2');

/*
   paima gydytoja is DB
   $nr - gydytojo id is DB
   return - (type: ARRAY)
*/
function getNaujiena( $id ) {
    $manoSQL = "SELECT * FROM naujienos  WHERE id = '$id' order by id DESC;  ";
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
        echo "Atleiskite , nepavyko";
        return NULL;
    }

}
//test
// $gyd1 = getDoctor(1);
// print_r( $gyd1 );

function getNaujienosVisi() {
    $manoSQL = "SELECT * FROM naujienos  order by id DESC ";
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
