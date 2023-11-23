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
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/imdb_icon.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="intactive" href="filmek.php"><i class="fa-solid fa-film"></i></a>
        <a class="active" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='inactive' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='inactive' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.1869654795723!2d20.126299876151332!3d46.26638857109846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474487ef3a185823%3A0x8844a2ac76936764!2sCinema%20City!5e0!3m2!1shu!2shu!4v1700611142037!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="eler">
            <p><i class="fa-solid fa-square-phone"></i> 06 80 800 800</p>
            <p><i class="fa-solid fa-globe"></i> cinemacity.hu</p>
            <p><i class="fa-solid fa-location-dot"></i> Szeged, Kossuth Lajos sgrt. 119, 6724</p>
        </div>
    </div>

    <div class="email-form">
        <h2>Ajánlj nekünk filmet!</h2>
        <fieldset class="field">
            <form action="https://formsubmit.co/balazsimdb@gmail.com" method="post">
                <div class="input">
                    <input type="text" name="veznev" placeholder="Vezetéknév" required>
                </div>
    
                <div class="input">
                    <input type="text" name="kernev" placeholder="Keresztnév" required>
                </div>
    
                <div class="input">
                    <input type="email" name="email" placeholder="E-mail cím" required>
                </div>
    
                <div class="input">
                    <input type="text" name="telszam" placeholder="Telefonszám" required>
                </div>
    
                <div class="input">
                    <input type="text" name="targy" placeholder="Tárgy" required>
                </div>
    
                <div class="msgbox">
                    <textarea name="msg" placeholder="Üzenet" cols="50" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn">Küldés</button>
                <button id="resetgomb" type="reset" class="btn">Visszaállítás</button>
            </form>    
        </fieldset>
    </div>
</body>
</html>