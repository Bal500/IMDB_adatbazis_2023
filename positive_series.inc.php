<?php
    require_once 'dbh.inc.php';
    require_once 'detailform.inc.php';

    $id = $_SESSION['id_actualFilm'];

    $sql = "UPDATE sorozatok SET ertekeles_pozitiv = ertekeles_pozitiv + 1 WHERE id = " . $id;

    if (isset($_SESSION['id'])) {
        $conn->query($sql);
        header("location: detailform.inc.php?id=" . $id);
    } else {
        header('location: login.php');
    }

    $conn->close();
?>
