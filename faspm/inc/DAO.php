<?php
/**
 * Created by PhpStorm.
 * User: carsj
 * Date: 30/10/2017
 * Time: 20:18
 */

include 'sql_connect.php';


$sql = "SELECT * FROM titulares";
$result = $connect->query($sql);
$mostra = '';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $mostra = "Nome Completo: " . $row["fullNameTit"]. " - Rg: " . $row["rgTit"]."<br>";

    }
} else {
    echo "0 results";
}

$result = $mostra;

$connect->close();


