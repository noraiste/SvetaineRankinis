<?php
// session_start();
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

function deleteVartotojas($id) {
    $manoSQL = "DELETE FROM vartotojai WHERE id = '$id'  LIMIT 1";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {  
        echo "ERROR nepavyko atleisti gydytojo nr: $id <br>";
    }
}


function createVartotojas($email, $pass, $id, $userType, $userName, $pass2) {
    $vart="SELECT*FROM vartotojai WHERE email='$email'";
    $result=mysqli_query(getPrisijungimas(), $vart);
    $num=mysqli_num_rows($result);
        if ($num==true){

            $_SESSION['zinute'] = "toks vartotojas jau egziztuoja";

        }else{
            $manoSQL="insert into vartotojai values('$email', '$pass', NULL , '$userType', '$userName', '$pass2')";
            mysqli_query(getPrisijungimas(), $manoSQL);
            $_SESSION['zinute'] = "registracija sekminga";
            }
        }

function prisijungimasVartotojas($email, $pass) {
    $vart="SELECT*FROM vartotojai WHERE email='$email' && password = '$pass'";
    $result=mysqli_query(getPrisijungimas(), $vart);
    $userTypes = mysqli_fetch_array($result);
    
        if ($userTypes['userType'] == 'admin'){
            $rem = $_POST['remember'];
            if (isset($_POST['remember'])) {
                setcookie('email', $email, time() + 60*60*10 ); 
                setcookie('password', $pass, time() + 60*60*10 ); 
            }
            $_SESSION['zinute'] = "Sveiki, $email";
            header('location:../adminFile.php');
        }else if ($userTypes['userType'] == 'user') {
            if (isset($_POST['remember'])) {
                setcookie('email', $email, time() + 60*60*10 ); 
                setcookie('password', $pass, time() + 60*60*10 ); 
            }
            $_SESSION['zinute'] = "Sveiki, $email";
            header('location:../index.php');
        } else {
            header('location:../prisijungimas-vartorojai-form.php');
            $_SESSION['zinute'] = "Neteisingas email arba slatazodis";
        }
    }

function editVartotojas($email, $password, $id) {
    $manoSQL = "UPDATE  vartotojai SET
                                    email = '$email',
                                    password = '$password'
                                WHERE id = '$id'
                                LIMIT 1
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    
    if ( $arPavyko == false) { 
        echo "ERROR nepavyko redaguoti gydytojo nr: $id, $email, $password <br>";
    }
}


function getVartotojas( $id ) {
    $manoSQL = "SELECT * FROM vartotojai  WHERE id = '$id' ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio gydytojo nera";
        return NULL;
    }
}

function getVartotojasVisi() {
    $manoSQL = "SELECT * FROM vartotojai   ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}