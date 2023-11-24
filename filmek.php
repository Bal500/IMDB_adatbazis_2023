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
        <h2>Filmadatbázis</h2>
        <p id="bemu">Böngéssz a filmek között, hogy ne legyen unalmas az este!</p>

        <?php
            require_once 'dbh.inc.php';

            if (isset($_SESSION["id"])) {
                echo '<button id="addbtn" onclick="window.location.href=\'new_film.php\'"><i class="fa-solid fa-plus"></i></button>';
                echo '<br>';
            } else {
                echo "<span class='closed'>Új filmet adnál adatbázisunkhoz? <a href='login.php'>Jelentkezz be!</a></span>";
                echo '<br>';
            }
        ?>
        <div class="films" id="print">
            <div class="film-con">
            <?php
                require_once 'dbh.inc.php';
                $getFilm = "SELECT cim, leiras, jatekido FROM filmek";
                $getSeries = "SELECT cim, leiras, evadok FROM sorozatok";
                $result_film = $conn->query($getFilm);
                $result_series = $conn->query($getSeries);

                if ($result_film->num_rows > 0) {
                    echo '<br>';
                    echo '<br>';
                    echo '<h3>Filmek</h3>';
                    while($row = $result_film->fetch_assoc()) {
                        echo '
                            <div class="film">
                                <span class="nev">' . $row["cim"] . '</span>
                                <br>
                                <p class="desc">' . $row["leiras"] . '</p>
                                <br>
                                <p class="filmlength">
                                Hossz: 
                                <br>' . $row["jatekido"] . ' p
                                </p>
                            </div>
                        ';
                    }
                }

                echo '<br>';

                if ($result_series->num_rows > 0) {
                    echo '<br>';
                    echo '<h3>Sorozatok</h3>';
                    while($row = $result_series->fetch_assoc()) {
                        echo '
                            <div class="film">
                                <span class="nev">' . $row["cim"] . '</span>
                                <br>
                                <p class="desc">' . $row["leiras"] . '</p>
                                <br>
                                <p class="filmlength">
                                Évadok száma: 
                                <br>' . $row["evadok"] . ' évad
                                </p>
                            </div>
                        ';
                    }
                }
                $conn->close();
            ?>
            </div>
        </div>
        
    </section>
</body>
</html>
