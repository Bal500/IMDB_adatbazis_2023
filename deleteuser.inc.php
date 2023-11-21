<?php
    require_once 'dbh.inc.php';

    $id_del = $_SESSION["id"];

    $query2 = "DELETE FROM personal WHERE userID=?";
    $query = "DELETE FROM user_form WHERE id=?";
    
    $stmt2 = mysqli_prepare($conn, $query2);
    mysqli_stmt_bind_param($stmt2, "i", $id_del);
    $query_run2 = mysqli_stmt_execute($stmt2);
    
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id_del);
    $query_run = mysqli_stmt_execute($stmt);

    if ($query_run && $query_run2) {
        echo '<script>
            alert("A felhasználó sikeresen törlésre került!");
        </script>';
        session_destroy();
        header("location: login.php?torolve");
        exit();
    } else {
        echo '<script>
            alert("Valami hiba történt, próbáld újra!");
        </script>';
        require_once 'logout.inc.php';
        exit();
    }
?>
