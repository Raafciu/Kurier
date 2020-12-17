<?php
include('../php/session.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {

    $link = mysqli_connect("sql206.epizy.com", "epiz_27358306", "qj5F4WPbIe8", "epiz_27358306_kurier") or die(mysqli_connect_error());

  } 

catch (Exception $e) {

  

    echo "Błąd połączenia z bazą danych";

  

  }

//$link = mysqli_connect("localhost", "1373017", "505023657", "1373017") or die(mysqli_connect_error()); 

    $link->set_charset("utf8mb4");?>