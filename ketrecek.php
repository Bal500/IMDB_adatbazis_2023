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
        <h2>Ketrecek</h2>
        <p id="non">Válogass elérhető ketreceink közül!</p>

        <a href="kiegeszito.php" id="backbtn"><i class="fa-solid fa-arrow-left"></i></a>
        <button id="printbtn"><i class="fa-solid fa-print"></i></button>

        <div class="chinek">
            <div class="chin-con">
                <div class="chin">
                    <span class="nev">Extra nagy ketrec</span>
                    <br>
                    <img src="./assets/kepek/ketrecek/ketrec3.jpg" alt="xnagy">
                    <p class="desc">
                        A csincsillák abszolút kedvence!
                        <br>
                        Több emeletes, hatalmas, tág ketrec, amely a kisállat minden
                        <br>
                        apróbb - nagyobb igényét kielégítheti.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 27.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Nagy ketrec</span>
                    <br>
                    <img src="./assets/kepek/ketrecek/ketrec1.jpg" alt="nagy">
                    <p class="desc">
                        Az extra nagy ketrechez nagyon hasonló,
                        <br>
                        bár kevesebb játékkal rendelkező ketrec. Ez a darab
                        <br>
                        is kielégíti a csincsillák igényeit, de kevesebb szórakozással kecsegtet.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 23.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Közepes ketrec</span>
                    <br>
                    <img src="./assets/kepek/ketrecek/ketrec2.jpg" alt="kozepes">
                    <p class="desc">
                        Természetesen ez a ketrec is teljesen megfelel egy csincsillának.
                        <br>
                        Bár nem több emeletes, és nem olyan tágas, egy kis extra,
                        <br>
                        ketrecen kívül töltött idővel könnyen kompenzálhatjuk
                        <br>
                        a kisebb ketrec hátrányait. Ez a darab is
                        <br>
                        több játékkal érkezik, ideális választás lehet, ha nem szeretnénk sokat költeni.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 18.000 Ft.-
                    </p>
                </div>
                
                <div class="chin">
                    <span class="nev">Kis ketrec</span>
                    <br>
                    <img src="./assets/kepek/ketrecek/ketrec4.jpg" alt="kicsi">
                    <p class="desc">
                        Bár a célnak megfelel, vannak benne játékok is, a kisállat
                        <br>
                        mozgástere enyhén korlátozva van. Ezzel a darabbal erősen ajánlott,
                        <br>
                        hogy a csincsillát több időre engedjük ki a ketrecből az átlagosnál.
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 15.000 Ft.-
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/JS/print.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>