<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (isset($_POST["submit_personal"])) {
        $birthdate = $_POST["birthdate"];
        $bio = $_POST["bio"];
        $movieType = $_POST["movieType"];
        $idealLength = $_POST["idealLength"];
        $prefers = $_POST["film_or_series"];
        $userID = $_SESSION["id"];
        $new_name = $_POST["name"];

        $nameUp = "UPDATE users SET name='$new_name' WHERE id='$userID'";
        $conn->query($nameUp);

        $checker = "SELECT COUNT(*) FROM personal WHERE userID = '$userID'";
        $result = mysqli_query($conn, $checker);
        $row = mysqli_fetch_array($result);

        if ($row[0] > 0) {
            $stmt = $conn->prepare("UPDATE personal SET bio = ?, birthDate = ?, movieType = ?, idealLength = ?, FSprefer = ? WHERE userID = ?");
            $stmt->bind_param("sssssi", $bio, $birthdate, $movieType, $idealLength, $prefers, $userID);
        } else {
            $stmt = $conn->prepare("INSERT INTO personal (userID, bio, birthDate, movieType, idealLength, FSprefer) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssss", $userID, $bio, $birthdate, $movieType, $idealLength, $prefers);
        }

        $stmt->execute();

        $stmt->close();
        $conn->close();
    }
    
    header("location: user.php");
    exit();
?>