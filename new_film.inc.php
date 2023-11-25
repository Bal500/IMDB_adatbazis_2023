<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (isset($_POST['submit_film'])) {
        $cim = $_POST['film_title'];
        $rendezo = $_POST['film_director'];
        $leiras = $_POST['film_desc'];
        $szineszek = $_POST['actors'];
        $jatekido = $_POST['film_length'];
        $mufaj = $_POST['film_type'];
        $megjelenes_eve = $_POST['film_publish'];
        $ertekeles = 0;
    
        $insert_film = "INSERT INTO filmek (cim, rendezo, leiras, szineszek, jatekido, mufaj, megjelenes_eve, ertekeles)
                        VALUES ('$cim', '$rendezo', '$leiras', '$szineszek', '$jatekido', '$mufaj', '$megjelenes_eve', '$ertekeles')";

        $conn->query($insert_film);

        $conn->close();
    
        header("location: filmek.php");
        exit();
    }
?>
