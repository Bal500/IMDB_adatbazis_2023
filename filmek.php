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
                echo '<button id="addbtn" onclick="window.location.href=\'new_record.php\'"><i class="fa-solid fa-plus"></i></button>';
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
                $getFilm = "SELECT id, rendezo, cim, leiras, jatekido FROM filmek";
                $getSeries = "SELECT id, cim, reszek, leiras, evadok FROM sorozatok";
                $getActor = "SELECT * FROM szineszek";
                $result_film = $conn->query($getFilm);
                $result_series = $conn->query($getSeries);
                $result_actor = $conn->query($getActor);

                if ($result_film->num_rows > 0) {
                    echo '<br>';
                    echo '<br>';
                    echo '<h3>Filmek</h3>';
                    while($row = $result_film->fetch_assoc()) {
                        echo "
                            <div class='film'>
                                <a href='detailform.php?id=" . $row["id"] . "&typeof=movie' class='details'>
                                    <span class='nev'>" . $row["rendezo"] . ": <br>" . $row["cim"] . "</span>
                                    <br>
                                    <p class='desc'>" . $row["leiras"] . "</p>
                                    <br>
                                    <p class='filmlength'>
                                    Hossz: 
                                    <br>" . $row["jatekido"] . " p
                                    </p>
                                </a>
                            </div>
                        ";
                    }
                }

                echo '<br>';

                if ($result_series->num_rows > 0) {
                    echo '<br>';
                    echo '<h3>Sorozatok</h3>';
                    while($row = $result_series->fetch_assoc()) {
                        echo "
                            <div class='film'>
                                <a href='detailform.php?id=" . $row["id"] . "&typeof=series' class='details'>
                                    <span class='nev'>" . $row["cim"] . "<br> (" . $row["reszek"] . " rész)</span>
                                    <br>
                                    <p class='desc'>" . $row["leiras"] . "</p>
                                    <br>
                                    <p class='filmlength'>
                                    Évadok száma: 
                                    <br>" . $row["evadok"] . " évad
                                    </p>
                                </a>
                            </div>
                        ";
                    }
                }

                echo '<br>';

                if ($result_actor->num_rows > 0) {
                    echo '<br>';
                    echo '<h3>Színészek</h3>';
                    while($row = $result_actor->fetch_assoc()) {
                        echo "
                            <div class='nona-film'>
                                <span class='nev'>" . $row["nev"] . "</span>
                                <br>
                                <p class='desc'>Született: <br>" . $row["szuletesi_datum"] . "</p>
                                <br>
                                <p class='filmlength'>
                                Állampolgársága: 
                                <br>" . $row["allampolgarsag"] . "
                                </p>
                                <span id='editButtons'>";
                                if (isset($_SESSION["id"])) {
                                    echo '<i class="fa-solid fa-pen" onclick="window.location=\'edit_actor.inc.php?id=' . $row['id'] . '\'"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash" onclick="window.location=\'edit_actor.inc.php?id=' . $row['id'] . '\'"></i>';
                                } else {
                                    echo "<i class='fa-solid fa-pen' onclick='window.location=\"login.php\"'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa-solid fa-trash' onclick='window.location=\"login.php\"'></i>";
                                }
                                echo "</span>
                            </div>
                        ";
                    }
                }

                echo '<br>';


                $sql_1 = "
                    SELECT cim, ertekeles_pozitiv, ertekeles_negativ, megjelenes_eve
                    FROM sorozatok
                    WHERE megjelenes_eve > 2019
                    ORDER BY ertekeles_pozitiv DESC
                    LIMIT 5;
                ";
                $result_sql_1 = $conn->query($sql_1);

                $sql_2 = "
                    SELECT megjelenes_eve, COUNT(cim) AS filmek_szama
                    FROM filmek
                    WHERE megjelenes_eve >= 2000
                    GROUP BY megjelenes_eve
                    ORDER BY megjelenes_eve DESC;
                ";
                $result_sql_2 = $conn->query($sql_2);



                if ($result_sql_1->num_rows > 0 || $result_sql_2->num_rows > 0) {
                    echo '<h3>Lekérdezések</h3>';
                    echo '<br> <br>';
                    $i = 1;
                    if ($result_sql_1->num_rows > 0) {
                        echo '<h5>(Listázza ki táblázatos formában az 5 legnagyobb értékelést kapott sorozatot, amely a 2019-es év után került bemutatásra.)</h3>';
                        while($row = $result_sql_1->fetch_assoc()) { 
                            echo "
                                <div class='film'>
                                    <br>"
                                    . $i . ". " . $row["cim"] .
                                    "<br>
                                </div>
                            ";
                            $i++;
                        }
                    }

                    if ($result_sql_2->num_rows > 0) {
                        echo '<br> <br> <br>';
                        echo '<h5>(Listázza ki táblázatos formában a 2000-es évtől kezdődően évenként a megjelent filmek számát év szerint csökkenő sorrendben.)</h3>';
                        while($row = $result_sql_2->fetch_assoc()) { 
                            echo "
                                <div class='film'>
                                    <br>"
                                    . $row["megjelenes_eve"] . ": " . $row["filmek_szama"] . " film jelent meg" .
                                    "<br>
                                </div>
                            ";
                        }
                    }
                }
                $conn->close();
            ?>
            </div>
        </div>
    </section>
</body>
</html>
