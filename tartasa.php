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
        <a class="active" href="tartasa.php"><i class="fa-solid fa-house"></i></a>
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

    <div class="torzs">
        <h1>A csincsilla tartása</h1>
        <div class="szoveg">
            <br>
            <p>
                Tudni szeretnéd, hogy mi a boldog csincsillák titka? A csincsillák az intelligenciájukkal és a személyiségükkel a csodálóikká tesznek minket. Mi kell ahhoz, hogy igazán harmonikus, boldog életük legyen? Mutatjuk!
            </p>

            <br>

            <p>
                Örökbefogadás, vagy vásárlás előtt fontos tudni, hogy a csincsilla 17 - 20, extrém esetben 25 évig is elélhet. Csak akkor vedd magadhoz őket, ha tizenéves távlatokra szeretnél háziállatot.  
            </p>

            <br>

            <p>
                A csincsilla tartás kapcsán az első legfontosabb információ, hogy nagy térre van szüksége ezzel eleget téve a nagy mozgásigénynek. Egy kerék nem elégíti ki a mozgásigényüket, ráadásul igen ritkán kapni megfelelő méretben (minimum 45 centiméteres kell nekik). Két állatnak minimum 150 centi magas, 80×60 cm alapterületű ketrec szükséges, ennél nagyobbnak pedig már nagyon örülnek. A nagy ketrecen kívül a lakás egy részét is csincsillabiztossá kell tenni, minden nap 30−60 perc szabad futkározásra ugyanis szükségük van.
            </p>

            <br>

            <img src="./assets/kepek/csincsilla/csin3.jpg" alt="haramdikcsin" class="toltokep">

            <h2>A csincsilla tartás helyes alapjai</h2>
            <p>
                Az állatok helyét nem szükséges almozni, sarok wc-re szoktathatók. Ebbe Carefresh, vagy más papíralom, kender– vagy lenalom, esetleg forgács kerülhet. A teljes aljzat almozása esetén is ezen anyagok használhatók, emellett Bunny Nature bedding easy alomszőnyeg is leteríthető. A ketrecben legyen csincsillánként egy fa- vagy kerámiaház vagy odú, két legalább 150 ml-es etetőtál, egy minimum 120 ml-es itató, legalább két játék és egy polár alvóhely. Lehetséges berendezési elemek még a textil függőágyak és pihenőhelyek, bújócső, minimum 45 cm-es, teli felületű futókerék, játékok. Tilos bármilyen rácsos kerék, szénagömb, illetve olyan tárgy elhelyezése, ami sérülést okozhat.
                A csincsillák ketrecét világos szobában kell elhelyezni, számukra legalább naponta tíz óra természetes fényt kell biztosítani 8-21 óra között. Az állat nem vihető ki a szabadba sétálni és nem tartható a kertben sem. Az állatok számára 18-23 fok közötti hőmérsékletet kell biztosítani. Ez alatt fűtéssel, e felett hűtéssel kell megoldani a számukra megfelelő hőmérséklet kialakítását. Az állatok ragadozóval (kutya, macska, görény stb.) egy légtérben tartása tilos, direkt kontakt velük és a többi fajjal is elkerülendő. A csincsillák betegre stresszelik magukat a puszta illatuktól, látványuktól, zajaiktól. Sajnos nem tudnak hozzájuk szokni, így ezt mindenképp át kell gondolni. Fontos még tudnod, hogy mivel a csincsillák éjjeli állatok és nappal alszanak, ez idő alatt nagyon zajosak tudnak lenni. Csak akkor helyezd el őket a hálószobádban, ha jó alvó vagy.
            </p>

            <br>

            <p>
                A csincsillák a legtisztább, legbarátságosabb kisállatok közé tartoznak, és NAPONTA fürdenek! Persze nem vízben, hanem egy speciális kvarcmentes homokban. Soha ne feledkezzünk meg a porfürdőről! Cserébe csincsillánknak jó lesz a közérzete, gyönyörű tiszta és fényes lesz a bundája.
            </p>

            <br>

            <img src="./assets/kepek/csincsilla/csin1.jpg" alt="elsocsin" class="toltokep">

            <h2>A csincsilla etetése és itatása</h2>
            <p>
                A csincsillák fűevők, így mindig legyen előttük friss, tiszta széna, számukra készült pelletált táp, illetve golyós önitatóban naponta friss víz. Olyan tápot válasszunk, aminek a rosttartalma minimum 20%, nem tartalmaz hozzáadott cukrot, színezéket, zöldséget, gyümölcsöt és gabonákat. Emellé gyógynövény adható kiegészítésként, a hiedelmekkel ellentétben a csincsilla nem etethető állati és egyéb származékokat tartalmazó termékekkel, magvakkal, emberi fogyasztásra készült ételekkel, nyers zöldséggel vagy gyümölccsel és szárított gyümölccsel sem.
            </p>
            <p>
                Az, hogy megeszik-e a zöldségeket, teljesen csincsillafüggő. Elvileg szeretik a répát, szőlőt, dinnyét, de nagyon óvatosan füvet, salátát, káposztát vagy más zöldeket is adhatunk nekik. A vizüket hetente 3-4 alkalommal cseréljük.
            </p>

            <br>

            <h2>Tévhitek a csincsillákkal kapcsolatban</h2>
            <p>
                Az egyik, hogy a kezessé nevelt állatok szeretnek kézben, ölben lenni. Ez 100-ból 99 állatra nem igaz, a csincsillák természetüknél fogva nem simogathatók, ölelgethetők, bundájukra nagyon kényesek. A kötődés jele náluk inkább az, hogy a szabad séta alatt rámásznak a gazdira, finoman harapdálják, húzgálják a szempilláját, szemöldökét, haját, és ugrálnak rajta ide-oda. Ilyenkor közel engedve őket magukhoz, de ez is bizalom és idő kérdése és még ekkor is képesek megijedni a fogástól. 
            </p>

            <br>

            <p>
                A másik gyakran hangoztatott tévedés, hogy a csincsillák hipoallergének. Nem azok. Bár a csincsillák ritkán okoznak allergiát, a vele járó dolgok viszont igen. Az általuk fogyasztott széna és növények a pollenallergiásokat bánthatják, az almozás és a napi homokozással szálló por pedig a porallergiásokat. Ezért sajnos sokszor előfordul, hogy valaki allergiás lesz a csincsillákra. Az étrendjükből a zöld növényeket kiiktatni nem lehet, a napi homokban való 10-20 perc fürdés (a csincsilla a sűrű és selymes bundáját karcmentes homokkal tartja tisztán) szintén szükséges. Ez a társával való kötődést és a stresszlevezetést is segíti számára, viszont tényleg nagy mennyiségű szálló porral és kosszal jár.
            </p>

            <br>

            <video id="video" width="320" height="240" controls>
                <source src="./assets/media/chinbath.mp4" type="video/mp4">
            </video>

            <h2>Mit tegyünk, ha megbetegszenek?</h2>
            <p>
                A többi kisállathoz hasonlóan betegség esetén kevés helyre vihetjük őket. Többnyire a fővárosban találni csak hozzájuk jól értő, egzotikus szakállatorvost, bár szerencsére már az ország távolabbi részein is nyílnak szuper rendelők. A vidéken élők mindenképp vegyék komolyan azt a kérdést, hogy el tudnak-e utazni sürgős esetekben azonnal a kisállattal. Ha a válasz nem, akkor sajnos nem a csincsillát keresik háziállatként. A felmerülő betegségekről egy későbbi cikkünkben írunk.
            </p>

            <br>

            <p>
                Összegzésül a csincsillák tartása drága a többi rágcsálóhoz képest. Életük során akár 3 millió forintra is rúghatnak a költségeik (nem az állatok kerülnek sokba, hanem az évekig való megfelelő tartás, az etetés, a ketrec és az állatorvos). Kérjük, csak olyan vegye magához őket, aki tudja vállalni azt, hogy közel 20 évig megfelelően gondoskodik róluk az anyagiak tekintetében is. A szeretet nagyon fontos, de nem elégséges, annál pedig nincs rosszabb, amikor anyagi okokból elszenvedett hiányok miatt testileg-lelkileg megkínzott kisállatokat kell menteni.
            </p>

            
        </div>
    </div>
    <footer>
        <div class="forras">
            <p>
                <a href="https://dtrbunny.hu/csincsilla-tartasa/" target=”_blank”>Forrás</a>
            </p>
            <p>
                <a href="https://www.haziallat.hu/kisemlos/kisemlos-fajok/csincsilla/63/" target="_blank">Forrás</a>
            </p>
        </div>
    </footer>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>