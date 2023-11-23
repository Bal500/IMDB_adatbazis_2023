<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (isset($_POST['submit_series'])) {
        $cim = $_POST['series_title'];
        $evadok = $_POST['series_season'];
        $reszek = $_POST['series_parts'];
        $leiras = $_POST['series_desc'];
        $mufaj = $_POST['series_type'];
        $ertekeles = 0;
    
        $insert_series = "INSERT INTO sorozatok (cim, leiras, mufaj, evadok, reszek, ertekeles)
                        VALUES ('$cim', '$leiras', '$mufaj', '$evadok', '$reszek', '$ertekeles')";

        $conn->query($insert_series);

        $conn->close();
    
        header("location: filmek.php");
        exit();
    }
?>
