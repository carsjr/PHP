<?php
/**
 * Created by PhpStorm.
 * User: carsj
 * Date: 25/10/2017
 * Time: 19:27
 */


$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "faspm";
$connect    = new mysqli($servername, $username, $password, $dbname);
    if ($connect->connect_error) {
        die("A conexão falhou!: " . $connect->connect_error);
    }
//echo "Conectado com sucesso!";