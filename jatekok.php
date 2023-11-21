<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Csincsilla Store</title>
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/szoveg.css">
    <link rel="stylesheet" href="./CSS/anim.css">
    <link rel="stylesheet" href="./CSS/iconbar.css">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="./CSS/table.css">
    <link rel="stylesheet" href="./CSS/print.css">
    <link rel="stylesheet" href="./CSS/back.css">
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/csinsegg.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="intactive" href="elerheto.php"><i class="fa fa-paw"></i></a>
        <a class="active" href="kiegeszito.php"><i class="fa-solid fa-baseball"></i></a>
        <a class="inactive" href="tartasa.php"><i class="fa-solid fa-house"></i></a>
        <a class="inactive" href="jellemzoi.php"><i class="fa-solid fa-venus-mars"></i></a>
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='inactive' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='inactive' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>

    <section id="chin1" class="chinwrap">
        <h2>Játékok</h2>
        <p id="non">Válogass elérhető játékaink közül!</p>

        <a href="kiegeszito.php" id="backbtn"><i class="fa-solid fa-arrow-left"></i></a>
        <button id="printbtn"><i class="fa-solid fa-print"></i></button>

        <div class="chinek">
            <div class="chin-con">
                <div class="chin">
                    <span class="nev">Csincsilla kerék</span>
                    <br>
                    <img src="./assets/kepek/jatekok/jatek1.jpg" alt="kerek">
                    <p class="desc">
                        A csincsillák általában jobban kedvelik az ilyen fajta kerekeket.
                        <br>
                        Bár az "általánosabb" kerék is megteszi, mindenképpen ezt javasoljuk.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 5.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Szaloncukor</span>
                    <br>
                    <img src="./assets/kepek/jatekok/jatek2.jpg" alt="szaloncukor">
                    <p class="desc">
                        Mászás, rágcsálás, ölelkezés.
                        <br>
                        Ez a fajta játék szinte mindenre jó.
                        <br>
                        Amennyire egyszerű, annyira nagyszerű!
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 1.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Labda</span>
                    <br>
                    <img src="./assets/kepek/jatekok/jatek3.jpg" alt="labda">
                    <p class="desc">
                        Ez a labda a legnagyszerűbb játékok alapja!
                        Tudtad, hogy a csincsillák is szeretnek focizni?
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 1.000 Ft.-
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/JS/print.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>