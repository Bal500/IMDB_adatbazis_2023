<?php
    if (isset($_POST["submit"])) {
        $email_log = $_POST["email"];
        $password_log = $_POST["password"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputLogin($email_log, $password_log) !== false) {
            echo "<script>
                alert('Hiba! Egyik mező sem lehet üres! Próbáld újra!');
                window.location.href = 'login.php#log';
            </script>";
            exit();    
        }

        loginUser($conn, $email_log, $password_log);
    } else {
        header("location: login.php");
        exit();
    }
?>