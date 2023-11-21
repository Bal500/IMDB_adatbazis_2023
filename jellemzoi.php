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
    <link rel="stylesheet" href="./CSS/toltokep.css">
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/csinsegg.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="intactive" href="elerheto.php"><i class="fa fa-paw"></i></a>
        <a class="inactive" href="kiegeszito.php"><i class="fa-solid fa-baseball"></i></a>
        <a class="inactive" href="tartasa.php"><i class="fa-solid fa-house"></i></a>
        <a class="active" href="jellemzoi.php"><i class="fa-solid fa-venus-mars"></i></a>
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='inactive' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='inactive' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>

    <div class="torzs">
        <h1>A csincsilla jellemzői</h1>
        <div class="szoveg">
            <p>
                A csincsilla, ez a pufók, szürke mókushoz hasonlító barátságos kis rágcsáló Amerika felfedezésével, az Andok-hegységből indulva kezdte meg hódító körútját (csakúgy mint kollégája, a tengerimalac). Nevüket a chincha indiánokról kapták, akik vadásztak rájuk, húsukat megették, bundájukat pedig ruhaként, takaróként használták. Bár a csincsilla genetikailag egyik rágcsálófajra sem hasonlít, leszögezhetjük: gyönyörű, sötét szemei, kicsi, kerekded fülei vannak, hosszú, érzékeny bajusszal kombinálva.
            </p>

            <br>

            <p>
                Fontos megérteni, hogy a chinchilla egy egzotikus állat, amely meglehetősen törékeny, nem túl erős idegrendszerrel rendelkezik. Ezért nem lehet semmilyen stresszhelyzetnek kitenni, mivel ez az állat egészségével kapcsolatos problémákhoz vezethet. Ezért gondosan gondolni kell, ha egy állatot ajándékba vásárolnak egy 12 év alatti gyermeknek.
            </p>

            <br>

            <p>
                A chinchilla szőrme az allergiás vagy asztmás emberek számára biztonságos.
            </p>

            <br>

            <p>
                A csincsillákat az egyik legtisztább állatnak nevezik. Otthonban folyamatosan gondoskodnak a szőrmeiről. A gondozásban azonban néha szükségük van emberi segítségre, amit otthon nem nehéz megtenni.
            </p>

            <br>

            <img src="./assets/kepek/csincsilla/csin4.jpg" alt="negyedikcsin" class="toltokep">

            <h2>Előfordulása</h2>
            
            <p>
                A csincsilla régebben Peru, Bolívia, Észak-Argentína és Chile hegyvidéki területein volt honos. Észak-Chilén kívül ma már ritkán lehet vele találkozni az Andokban. A csincsillát kíméletlenül vadászták, mára veszélyeztetett fajjá vált. A védelme érdekében hozott törvényeknek köszönhetően 1970 óta lassan újra nő a számuk.
            </p>

            <br>

            <h2>Megjelenése</h2>

            <p>
                Az állat fej-törzs-hossza 25-26 centiméter, farokhossza 17-18 centiméter és testtömege 420-600 gramm, a tenyészállatok akár 800 grammosak is lehetnek. A csincsilla bundája sűrű, puha és jól védi a hidegtől. Szőre szürke színű, selymes tapintású, puha. Minden szőrtüszőből legalább 40 szőrszál nő ki. Testének felső része gyöngyszínű szürkésfehér vagy ezüstszürke, melyen enyhén erezetes minta található. A hasoldal világosabb.
            </p>

            <br>

            <p>
                Nagy fején, széles pofa és nagy fekete szemek vannak. A hosszú serteszerű bajusz lehet fekete vagy fehér. Füle lekerekített hegyű és elálló, kiváló hallást biztosít az állatnak. A hátsó végtagok hosszúak és izmosak. Az ujjak végén puha párnácskák találhatók, ezek védik a lábat a sziklák között. Farka hosszú és bozontos. A farkot borító szőrszálak hosszabbak és durvábbak, mint a bunda többi részén levők, színük fekete vagy barna.
            </p>

            <br>

            <img src="./assets/kepek/csincsilla/csin5.jpg" alt="otodikcsin" class="toltokep">

            <h2>Szaporodása</h2>

            <p>
                Az ivarérettséget körülbelül 4 hónapos korban éri el. A párzási időszak egész évben tart. A nőstény akár háromszor is képes elleni egy évben, szabadon azonban általában csak egyszer. A vemhesség körülbelül 110 napig tart, ennek végén a nőstény 1-4 utódot hoz a világra. Születésükkor a kicsinyek csak 40-50 grammot nyomnak, és 10 centiméter hosszúak.
            </p>

            <br>

            <p>
                Bundájuk és 20 foguk azonban már teljesen kinőtt, és szemük nyitva van. Az elválasztás 6-8 hét után történik meg.
            </p>

            <br>

            <img src="./assets/kepek/csincsilla/csin6.jpg" alt="hatodikcsin" class="toltokep">

            <h2>Érdekességek</h2>

            <p>
                A csincsilla bundája azért olyan sűrű, mert minden szőrtüszőből 40-80 szőrszál nő. Egy négyzetcentiméteren több szőrszála van, mint bármely más emlősnek. Az egyes szőrszálak annyira finomak, hogy szabad szemmel alig láthatók. Egy hosszú női bunda előállításához legalább 150 csincsilla prémjére van szükség. A nőstény bajsza sokkal hosszabb, mint a hímé.
            </p>

            <button id="chinbtn"><i class="fa-solid fa-volume-high"></i></button>

            <table id="csinadat">
                <tr>
                    <th></th>
                    <th>Nőstény</th>
                    <th>Hím</th>
                </tr>
                <tr>
                    <td>Átlag életkor (fogságban)</td>
                    <td>12 - 20 év</td>
                    <td>12 - 20 év</td>
                </tr>
                <tr>
                    <td>Átlag életkor (vadonban)</td>
                    <td>10 év</td>
                    <td>10 év</td>
                </tr>
                <tr>
                    <td>Átlagos súly</td>
                    <td>800 gramm</td>
                    <td>420 - 600 gramm</td>
                </tr>
                <tr>
                    <td>Átlag méret</td>
                    <td>25 - 26 cm</td>
                    <td>25 - 26 cm</td>
                </tr>
            </table>

            
        </div>
    </div>
    <footer>
        <div class="forras">
            <p>
                <a href="https://hu.wikipedia.org/wiki/Csincsilla#%C3%89letm%C3%B3dja" target=”_blank”>Forrás</a>
            </p>
        </div>
    </footer>
    <script src="./assets/JS/csinhang.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>