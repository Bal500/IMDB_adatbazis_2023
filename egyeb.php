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
        <h2>Egyebek</h2>
        <p id="non">Válogass kedvedre! Minden ami kellhet még</p>

        <a href="kiegeszito.php" id="backbtn"><i class="fa-solid fa-arrow-left"></i></a>
        <button id="printbtn"><i class="fa-solid fa-print"></i></button>

        <div class="chinek">
            <div class="chin-con">
                <div class="chin">
                    <span id="nev">Csincsilla táp</span>
                    <br>
                    <img src="./assets/kepek/egyebek/tap.jpg" alt="tap">
                    <p id="desc">
                        A csincsilláknak különleges tápra van szüksége.
                        <br>
                        Bár hasonlít más állatok tápjaira, csak csincsilláknak készült táp használható!
                    </p>
                    <br>
                    <p id="price">
                        <br>
                        Ár: 3.200 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Görgős itató</span>
                    <br>
                    <img src="./assets/kepek/egyebek/itato.jpg" alt="itato">
                    <p class="desc">
                        A csincsillák nem tálból isznak.
                        <br>
                        Nem szabad összetéveszteni őket ebben más állatokkal.
                        <br>
                        A hörcsöghöz hasonlóan, görgős itatóra van szükségük.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 2.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Csincsilla jutalomfalat</span>
                    <br>
                    <img src="./assets/kepek/egyebek/juti.jpg" alt="jutifalat">
                    <p class="desc">
                        Habzsolni minden kisállat szeret. Így van ezzel a csincsilla is.
                        <br>
                        Imád falatozni, jutalmat kapni. Egészítsd ki a repertoárt jutalomfalattal!
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 1.700 Ft.-
                    </p>
                </div>
                
                <div class="chin">
                    <span class="nev">Kvarcmentes homok</span>
                    <br>
                    <img src="./assets/kepek/egyebek/homok.jpg" alt="homok">
                    <p class="desc">
                        A csincsilla fürdéséhez elengedhetetlen a prémium homok.
                        <br>
                        Nem elég neki a sima, "kerti homok", bizony kvarcmentesre van szüksége.
                        <br>
                        A jó homokot pedig, fényes és nagy bundával hálálja meg!
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 4.000 Ft.-
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/JS/print.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>