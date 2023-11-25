<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'dbh.inc.php';

    if (isset($_POST['submit_actor'])) {
        $szuletesi_datum = $_POST['actor_dob'];
        $nev = $_POST['actor_name'];
        $allampolgarsag = $_POST['actor_nationality'];
    
        $insert_actor = $conn->prepare("INSERT INTO szineszek (szuletesi_datum, nev, allampolgarsag)
                        VALUES (?, ?, ?)");
        $insert_actor->bind_param("sss", $szuletesi_datum, $nev, $allampolgarsag);
        $insert_actor->execute();

        $conn->close();
    
        header("location: filmek.php");
        exit();
    }
?>
