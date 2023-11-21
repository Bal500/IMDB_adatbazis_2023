<?php
    if (isset($_POST["submit_reg"])) {
        $name = $_POST["name_register"];
        $email = $_POST["email_register"];
        $password = $_POST["password_register"];
        $password2 = $_POST["password2_register"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($name, $email, $password, $password2) !== false) {
            echo "<script>
                alert('Hiba! Egyik mező sem lehet üres! Próbáld újra!');
                window.location.href = 'login.php#reg';
            </script>";
            exit();    
        }
        if (invalidUid($name) !== false) {
            echo "<script>
                alert('Hiba! A neved nem állhat számokból! Próbáld újra!');
                window.location.href = 'login.php#reg';
            </script>";
            exit();    
        }
        if (invalidEmail($email) !== false) {
            echo "<script>
                alert('Hiba! Az e-mail cím hibás! Próbáld újra!');
                window.location.href = 'login.php#reg';
            </script>";
            exit();
        }
        if (pwdMatch($password, $password2) !== false) {
            echo "<script>
                alert('Hiba! A jelszavak nem egyeznek! Próbáld újra!');
                window.location.href = 'login.php#reg';
            </script>";
            exit();
        }
        if (emailExists($conn, $email) !== false) {
            echo "<script>
                alert('Hiba! Az e-mail cím már használatban van! Próbáld újra!');
                window.location.href = 'login.php#reg';
            </script>";
            exit();
        }
        if (missingToS() !== false) {
            echo "<script>
                alert('Hiba! Az ÁSZF elfogadása feltétele az oldalra való regisztrációnak! Próbáld újra!');
                window.location.href = 'login.php#reg';
            </script>";
            exit();
        }

        createUser($conn, $name, $email, $password);
    } else {
        header("location: login.php#log");
        exit();
    }