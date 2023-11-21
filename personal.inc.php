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
        $dailyTime = $_POST["chintime"];
        $favChin = $_POST["favchin"];
        $ownsChinchilla = $_POST["owns_chinchilla"];
        $loveTime = $_POST["year_selector"];
        $userID = $_SESSION["id"];
        $new_name = $_POST["name"];

        $nameUp = "UPDATE user_form SET name='$new_name' WHERE id='$userID'";
        $conn->query($nameUp);

        $checker = "SELECT COUNT(*) FROM personal WHERE userID = '$userID'";
        $result = mysqli_query($conn, $checker);
        $row = mysqli_fetch_array($result);

        if ($row[0] > 0) {
            $stmt = $conn->prepare("UPDATE personal SET bio = ?, birthDate = ?, dailyTime = ?, loveTime = ?, favChin = ?, owner = ? WHERE userID = ?");
            $stmt->bind_param("ssssssi", $bio, $birthdate, $dailyTime, $loveTime, $favChin, $ownsChinchilla, $userID);
        } else {
            $stmt = $conn->prepare("INSERT INTO personal (userID, bio, birthDate, dailyTime, loveTime, favChin, owner) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issssss", $userID, $bio, $birthdate, $dailyTime, $loveTime, $favChin, $ownsChinchilla);
        }

        $stmt->execute();

        $stmt->close();
        $conn->close();
    }
    
    header("location: user.php");
    exit();
?>