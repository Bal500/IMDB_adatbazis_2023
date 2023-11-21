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
        <a class="inactive" href="elerheto.php"><i class="fa fa-paw"></i></a>
        <a class="inactive" href="kiegeszito.php"><i class="fa-solid fa-baseball"></i></a>
        <a class="inactive" href="tartasa.php"><i class="fa-solid fa-house"></i></a>
        <a class="inactive" href="jellemzoi.php"><i class="fa-solid fa-venus-mars"></i></a>
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='active' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='active' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>
    <div class="wrapper">
        <form action="loginmethod.inc.php" method="post" id="login-method">
            <div class="login-form">
                <h2>Bejelentkezés</h2>
                <div class="input">
                    <span class="icon"><i class="fa-solid fa-at"></i></span>
                    <input type="email" name="email" required>
                    <label>E-mail</label>
                </div>
    
                <div class="input">
                    <span class="icon"><i class="fa-solid fa-key"></i></span>
                    <input type="password" name="password" required>
                    <label>Jelszó</label>
                </div>
    
                <button type="submit" name="submit" class="btn">Belépés</button>

                <div class="login-regist">
                    <p>Még nincs fiókod? <a href="#reg" class="regist-link">Regisztrálj!</a></p>
                </div>
            </div>
        </form>

        <form action="registermethod.inc.php" method="post" id="register-method">
            <div class="regist-form">
                <h2>Regisztráció</h2>
                    <div class="input">
                        <span class="icon"><i class="fa-solid fa-signature"></i></span>
                        <input type="text" name="name_register" required>
                        <label>Név</label>
                    </div>
                    <div class="input">
                        <span class="icon"><i class="fa-solid fa-at"></i></span>
                        <input type="email" name="email_register" required>
                        <label>E-mail</label>
                    </div>
                    <div class="input">
                        <span class="icon"><i class="fa-solid fa-key"></i></span>
                        <input type="password" name="password_register" required>
                        <label>Jelszó</label>
                    </div>
                    <div class="input">
                        <span class="icon"><i class="fa-solid fa-key"></i></span>
                        <input type="password" name="password2_register" required>
                        <label>Jelszó újra</label>
                    </div>
                    <div class="aszf">
                        <label><input type="checkbox" name="aszf" required>ÁSZF elfogadása</label>
                    </div>
                    <button type="submit" name="submit_reg" class="btn">Regisztráció</button>
                    <div class="login-regist">
                        <p>Van már fiókod? <a href="#log" class="login-link">Jelentkezz be!</a></p>
                    </div>
            </div>
        </form>
    </div>
    <script src="./assets/JS/login.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>