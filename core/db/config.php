<?php

$host = 'localhost';
$user = 'root';
$pass = ''; //hslOcp?h!?}94Tdk
$name = 'ptc';

$connect = mysqli_connect($host,$user,$pass,$name);
if (!$connect){
    echo htmlentities("Error with connections to database!") . mysqli_connect_error();
}