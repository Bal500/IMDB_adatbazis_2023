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

    <section id="chin1" class="chinwrap">
        <h2>Filmadatbázis</h2>
        <p id="bemu">Böngéssz a filmek között, hogy ne legyen unalmas az este!</p>

        <div class="chinek" id="print">
            <div class="chin-con">
                <div class="chin">
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

                <div class="chin">
                    <span class="nev">Kókusz</span>
                    <br>
                    <img src="./assets/kepek/chinek/masodikchin.jpg" alt="kokusz">
                    <p class="desc">
                        Kókusz 2022. november 23-án született. A hófehér színű kis csincsilla kölyök igazi társasági lény.
                        <br>
                        Nagyon szeret más állatok közelében lenni, imád játszani. Kedvencei a plüssjátékok.
                        <br>
                        Emberektől sem fél, kézhez szokott kis kedvenc.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 40.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Hamu</span>
                    <br>
                    <img src="./assets/kepek/chinek/harmadikchin.jpg" alt="hamu">
                    <p class="desc">
                        Hamu 2022. január 10-én született fehér - szürke színű gombóc csincsilla.
                        <br>
                        Igazán barátságos természetű, hiszen ha csak teheti, valakinek az ölében, kezében helyezkedik el.
                        <br>
                        Ebből kifolyólag nagyon szeret lustálkodni és az evést sem veti meg, így igazi kis gombóc lett belőle.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 25.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Nutella</span>
                    <br>
                    <img src="./assets/kepek/chinek/negyedikchin.jpg" alt="nutella">
                    <p class="desc">
                        Nutella 2022. november 6-án született.
                        <br>
                        Ez a kis szürke kölyök jobban kedveli a magányos időtöltést, napja legnagyobb részében egyedül játszik, fürdik.
                        <br>
                        Kissé visszahúzódó, más állatoktól fél, bizalmatlan. Egyedüli kisállatnak javasolt.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 30.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Mochi</span>
                    <br>
                    <img src="./assets/kepek/chinek/otodikchin.jpg" alt="mochi">
                    <p class="desc">
                        Mochi 2022. augusztus 10-én született.
                        <br>
                        Kíváncsi természettel rendelkezik, egy kis finom falatért bármikor az emberek ölébe fekszik, de inkább magányos típus.
                        <br>
                        Nagyon szeret játszani, kifejezetten kedveli a futókereket.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 30.000 Ft.-
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/JS/printe.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>