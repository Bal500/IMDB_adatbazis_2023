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
    <link rel="stylesheet" href="./CSS/print.css">
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/imdb_icon.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="active" href="filmek.php"><i class="fa-solid fa-film"></i></a>
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
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

        <div class="films" id="print">
            <div class="film-con">
                <div class="film">
                    <span class="nev">A fegyvertelen katona</span>
                    <br>
                    <p class="desc">
                        A második világháborús amerikai hadsereg egyik felcsere, Desmond T. Doss,
                        <br>
                        aki az okinavai csata idején szolgált, nem hajlandó fegyvert ragadni,
                        <br>
                        ezáltal ő lesz az első ember az amerikai történelemben, aki leadott lövés nélkül kapja meg a Becsületrendet.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Hossz: 139 perc
                    </p>
                </div>

            </div>
        </div>
    </section>
    <script src="./assets/JS/printe.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>