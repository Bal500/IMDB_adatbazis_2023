<?php
    session_start();
    require_once 'dbh.inc.php';

    if (isset($_POST['send'])) {
        $message = $_POST['message'];
        $sender = $_SESSION['name'];

        $stmt = $db->prepare("INSERT INTO chat (sender, message, created_at) VALUES (?, ?, NOW())");
        $stmt->execute([$sender, $message]);

        $stmt = $conn->prepare("INSERT INTO chat (sender, message, created_at) VALUES (?, ?, NOW());");
        $stmt->bind_param("iss", $sender, $message, $birthdate, $dailyTime, $loveTime, $favChin, $ownsChinchilla);

        $stmt->execute();

        $conn->close();
    }
?>