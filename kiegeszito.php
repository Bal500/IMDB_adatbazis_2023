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
        <h2>Kiegészítők</h2>
        <p>Válogass elérhető kiegészítőink közül!</p>
        <div class="chinek">
            <div class="chin-con">
                <a href="ketrecek.php">
                    <div class="prod">
                        <span class="nev">Ketrecek</span>
                        <br>
                        <img src="./assets/kepek/kiegkep/ketrec.jpg" alt="ketrec">
                        <p class="desc">
                            A csincsilláknak nagy mozgástér szükséges. Nem elégszenek meg egy kis ketreccel.
                            <br>
                            Nálunk csak csincsilla kompatibilis ketreceket találsz, hiszen szenvedélyünk a
                            <br>
                            csincsillák boldogsága!
                        </p>
                    </div>
                </a>

                <a href="furdokad.php">
                    <div class="prod">
                        <span class="nev">Kádak</span>
                        <br>
                        <img src="./assets/kepek/kiegkep/kad.jpg" alt="kad">
                        <p class="desc">
                            Hogy szép, fluffy csincsillád legyen, elengedhetetlen a "fur care".
                            <br>
                            A csincsillák nagyon szeretnek fürdőzni, ezért mindenképp kell nekik egy fürdőkád is.
                            <br>
                            Na persze nem vízben, hanem kvarcmentes homokban pancsolnak.
                        </p>
                    </div>
                </a>
                
                <a href="jatekok.php">
                    <div class="prod">
                        <span class="nev">Játékok</span>
                        <br>
                        <img src="./assets/kepek/kiegkep/jatek.jpg" alt="jatek">
                        <p class="desc">
                            A csincsillák igazán játékos állatok. Hogy kellően elfáradjanak és szórakozottak legyenek
                            <br>
                            bizony nem árt egy pár játék is a ketrecbe, vagy azon kívül.
                            <br>
                            Nézz be ide, ha valami szórakoztató eszközt keresel kedvencednek!
                        </p>
                    </div>
                </a>
                
                <a href="egyeb.php">
                    <div class="prod">
                    <span class="nev">Egyéb</span>
                    <br>
                    <img src="./assets/kepek/kiegkep/egyeb.jpg" alt="egyeb">
                    <p class="desc">
                        Csincsilládnak tápot, vagy esetleg fürdő homokot keresel?
                        <br>
                        Az itt elérhető termékek közül biztosan megtalálod a csincsilládnak megfelelőt!
                    </p>
                </div>
                </a>
            </div>
        </div>
    </section>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>