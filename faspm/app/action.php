<?php
/**
 * Created by PhpStorm.
 * User: carsj
 * Date: 24/10/2017
 * Time: 22:27
 */

include '../inc/sql_connect.php';



//POST FORM TITULAR



/*
//POST FORM DEPENDENTE
$tipoDepen       = ($_POST['tipoDepen']);
$fullNameDepen   = ($_POST['fullNameDepen']);
$dtNascDepen     = ($_POST['dtNascDepen']);
$rgDepen         = ($_POST['rgDepen']);
$cpfDepen        = ($_POST['cpfDepen']);
$emailDepen      = ($_POST['emailDepen']);
$nomePaiDepen    = ($_POST['nomePaiDepen']);
$nomeMaeDepen    = ($_POST['nomeMaeDepen']);

*/

$sqlTit = "INSERT INTO titulares (fullNameTit, rgTit, cpfTit, foneTit, emailTit, postoGradTit, opmTit, dtNascTit, dtIncTit) 
        VALUES ('$fullNameTit', '$rgTit', '$cpfTit', '$foneTit', '$emailTit', '$postoGradTit', '$opmTit','$dtNascTit', '$dtIncTit')";
/*
$sqlDepen = "INSERT INTO dependentes (tipoDepen, fullNameDepen, dtNascDepen, rgDepen, cpfDepen, emailDepen, nomePaiDepen, nomeMaeDepen) 
       VALUES ('$tipoDepen', '$fullNameDepen', '$dtNascDepen', '$rgDepen', '$cpfDepen', '$emailDepen', '$nomePaiDepen', '$nomeMaeDepen')";
*/

if ($connect->query($sqlTit) === TRUE) {
    echo "New record created successfully";
    header("Location: contribuinte.php");
} else {
    echo "Error: " . $sqlTit . "<br>" . $connect->error;
}
/*
if ($connect->query($sqlDepen) === TRUE) {
    echo "New record created successfully";
    header("Location: cad_contribuintes.php");
} else {
    echo "Error: " . $sqlDepen . "<br>" . $connect->error;
}
*/

?>

<?php

include_once "../html/modal/modal_titular.html";