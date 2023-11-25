<?php
    require_once 'dbh.inc.php';

    $id_del = $_GET["id"];

    $query = "DELETE FROM szineszek WHERE id = ?";
    
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id_del);
    $query_run = mysqli_stmt_execute($stmt);

    header("location: filmek.php");
?>
