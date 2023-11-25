<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>IMDb</title>
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/szoveg.css">
    <link rel="stylesheet" href="./CSS/anim.css">
    <link rel="stylesheet" href="./CSS/iconbar.css">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="./CSS/table.css">
    <link rel="stylesheet" href="./CSS/buttons.css">
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/imdb_icon.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <a class="active" href="filmek.php"><i class="fa-solid fa-film"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='inactive' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='inactive' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>

    <section id="filmsection" class="filmwrap">
        <br>
        <button id="backbtn" onclick="window.location.href='filmek.php'"><i class="fa-solid fa-arrow-left"></i></button>
        <?php
            require_once 'dbh.inc.php';

            $id_actualFilm = $_GET['id'];
            $_SESSION['id_actualFilm'] = $id_actualFilm;
            $getFilm = "SELECT * FROM filmek WHERE id = " . $id_actualFilm;
            $result_film = $conn->query($getFilm);

            while ($film = $result_film->fetch_assoc()) {
                echo '<br>';
                echo '<span class="nev">' . $film["rendezo"] . ': <br>' . $film["cim"] . ' (' . $film["megjelenes_eve"] . ') <br> ('. $film["mufaj"] .') </span>';
                echo '<br> <br> <br>';
                echo '<p class="desc">' . $film["leiras"] . '</p>';
                echo '<br>';
                echo '<p class="desc">' . $film["szineszek"] . '</p>';
                echo '<br>';
                echo '<p class="filmlength"> Hossz: <br>' . $film["jatekido"] . ' p </p>';
                echo '<br>';
                echo '<i class="fa-solid fa-thumbs-up" onclick="window.location=\'positive.inc.php?id=' . $_GET['id'] . '\'"></i> (' . $film["ertekeles_pozitiv"] . ') ' . '<i class="fa-solid fa-thumbs-down" onclick="window.location=\'negative.inc.php?id=' . $_GET['id'] . '\'"></i> (' . $film["ertekeles_negativ"] . ')';
                echo '<br>';
                echo '<br>';
                echo '<i class="fa-solid fa-pen"></i>';
            }
        ?>
    </section>
</body>
</html>
