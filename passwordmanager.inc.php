<?php
    session_start();
    require_once 'dbh.inc.php';

    if (isset($_POST["currpass"]) && isset($_POST["newpass"]) && isset($_POST["newpass2"])) {
        $currPass = $_POST["currpass"];
        $newPass = $_POST["newpass"];
        $newPass2 = $_POST["newpass2"];
        $userID = $_SESSION["id"];

        $stmt = $conn->prepare("SELECT password FROM user_form WHERE id = ?");
        $stmt->bind_param("i", $userID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if (password_verify($currPass, $row["password"])) {
            if ($newPass === $newPass2) {
                $newPassHashed = password_hash($newPass, PASSWORD_DEFAULT);

                $stmt = $conn->prepare("UPDATE user_form SET password = ? WHERE id = ?");
                $stmt->bind_param("si", $newPassHashed, $userID);
                $stmt->execute();

                $stmt->close();
                $conn->close();

                header("location: user.php");
                exit();
            } else {
                echo "<script>
                    alert('Hiba! Az új jelszavak nem egyeznek!');
                    window.location.href = 'user.php';
                </script>";
            }
        } else {
            echo "<script>
                    alert('Hiba! A jelenlegi jelszó hibás!');
                    window.location.href = 'user.php';
                </script>";
        }
    }
?>
