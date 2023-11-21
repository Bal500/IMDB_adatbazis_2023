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
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/csinsegg.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="intactive" href="elerheto.php"><i class="fa fa-paw"></i></a>
        <a class="inactive" href="kiegeszito.php"><i class="fa-solid fa-baseball"></i></a>
        <a class="inactive" href="tartasa.php"><i class="fa-solid fa-house"></i></a>
        <a class="inactive" href="jellemzoi.php"><i class="fa-solid fa-venus-mars"></i></a>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.786302938764!2d20.146143315526782!3d46.274350979118864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474487ffab2f0dfd%3A0x3eeb67e362e3f6d8!2zU3plZ2VkLCBHecO2bmd5dmlyw6FnIHUuIDExLCA2NzIz!5e0!3m2!1shu!2shu!4v1678303290167!5m2!1shu!2shu" width="600" height="450" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="eler">
            <p><i class="fa-solid fa-square-phone"></i> +36 90 001 10101</p>
            <p><i class="fa-solid fa-at"></i> csincsillastore@gmail.com</p>
            <p><i class="fa-solid fa-location-dot"></i> Szeged, Gyöngyvirág ucta 11</p>
        </div>
    </div>

    <div class="email-form">
        <h2>Lépj velünk kapcsolatba!</h2>
        <fieldset class="field">
            <form action="https://formsubmit.co/csincsillastore@gmail.com" method="post">
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
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>