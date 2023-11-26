<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'dbh.inc.php';

    if (isset($_POST['submit_series'])) {
        $cim = $_POST['series_title'];
        $rendezo = $_POST['series_director'];
        $megjelenes_eve = $_POST['series_publish'];
        $evadok = $_POST['series_season'];
        $reszek = $_POST['series_parts'];
        $leiras = $_POST['series_desc'];
        $szineszek = $_POST['actors'];
        $mufaj = $_POST['series_type'];
        $ertekeles = 0;
    
        $insert_series = $conn->prepare("INSERT INTO sorozatok (cim, rendezo, megjelenes_eve, leiras, szineszek, mufaj, evadok, reszek, ertekeles_pozitiv, ertekeles_negativ)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insert_series->bind_param("ssssssiisi", $cim, $rendezo, $megjelenes_eve, $leiras, $szineszek, $mufaj, $evadok, $reszek, $ertekeles, $ertekeles);
        $insert_series->execute();

        $conn->close();
    
        header("location: filmek.php");
        exit();
    }
?>
