<?php
    require_once 'dbh.inc.php';
    require_once 'detailform.php';

    $id = $_SESSION['id_actualFilm'];

    $sql = "UPDATE filmek SET ertekeles_pozitiv = ertekeles_pozitiv + 1 WHERE id = " . $id;

    if (isset($_SESSION['id'])) {
        $conn->query($sql);
        header("location: detailform.php?id=" . $id . "&typeof=movie");
    } else {
        header('location: login.php');
    }

    $conn->close();
?>
