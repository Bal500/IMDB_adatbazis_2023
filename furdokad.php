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
        <h2>Kádak</h2>
        <p id="non">Válogass elérhető kádjaink közül!</p>

        <a href="kiegeszito.php" id="backbtn"><i class="fa-solid fa-arrow-left"></i></a>
        <button id="printbtn"><i class="fa-solid fa-print"></i></button>

        <div class="chinek">
            <div class="chin-con">
                <div class="chin">
                    <span class="nev">Egérfüles kád</span>
                    <br>
                    <img src="./assets/kepek/kadak/kad2.jpg" alt="fules">
                    <p class="desc">
                        Bár a formája szinte mindegy, mégis nagyon aranyos választás lehet!
                        <br>
                        A csincsillád imádni fogja!
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 3.000 Ft.-
                    </p>
                </div>

                <div class="chin">
                    <span class="nev">Fürdőkád</span>
                    <br>
                    <img src="./assets/kepek/kadak/kad1.jpg" alt="kad">
                    <p class="desc">
                        Egyszerű, műanyag kád. Csak töltsd fel,
                        <br>
                        és indulhat is a móka! Ne aggódj, egy dagi kisállat is belefér!
                    </p>
                    <br>
                    <p class="price">
                        <br>
                        Ár: 2.000 Ft.-
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/JS/print.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>