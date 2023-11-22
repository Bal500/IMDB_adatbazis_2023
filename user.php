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
    <link rel="stylesheet" href="./CSS/toltokep.css">
    <link rel="stylesheet" href="./CSS/back.css">
    <link rel="stylesheet" href="./CSS/sidebar.css">
    <link rel="stylesheet" href="./CSS/userinterface.css">
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/imdb_icon.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="intactive" href="elerheto.php"><i class="fa fa-paw"></i></a>
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='active' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='active' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>
    
    <div class="sidebar">
        <div class="user_data">
            <?php
                echo $_SESSION["name"];
            ?>
        </div>
        <img id="pp" src="./assets/kepek/user/defaultPP.jpg" alt="profilkep" width="200" height="200">

        <div class="buttons">
            <div class="userinfo">
                <button class="defaultbtn"><i class="fa-solid fa-person"></i><span>Személyes adatok</span></button>
            </div>

            <div class="security">
                <button class="defaultbtn" onclick=""><i class="fa-solid fa-lock"></i><span>Biztonság</span></button>
            </div>
            
            <button onclick="window.location='logout.inc.php'" class="defaultbtn"><i class="fa-solid fa-right-from-bracket"></i><span>Kijelentkezés</span></button>
            <button onclick="window.location='confirmation.inc.php'" id="delete_account"><i class="fa-solid fa-trash"></i><span>Fiók törlése</span></button>
        </div>
    </div>
    
    <div class="data">
        <div class="userinfoForm active">
            <form method="post" action="personal.inc.php" onsubmit="return confirm('A változtatások csak ki- és bejelentkezés után lesznek láthatóak!')">
                <div class="wrapper">
                    <div class="namer">
                        <span class="identifier">Név:</span>
                        <input class="inner" type="text" name="name" placeholder="Itt módosíthatod a neved..." value="<?php echo $_SESSION["name"];?>">
                    </div>
                </div>
                <div class="wrapper">
                    <div class=dob>
                        <span class="identifier">Születési idő:</span>
                        <br>
                            <input class="inner" type="date" name="birthdate" value="<?php echo $_SESSION["birthDate"];?>">
                    </div>
                </div>
                <div class="wrapper">
                    <div class="bio">
                        <span class="identifier">Legjobb filmes élményem:</span>
                            <textarea class="inner" name="bio" placeholder="Mesélj magadról, hogy jobban megismerhessünk..."><?php echo $_SESSION['bio'];?></textarea>
                    </div>
                    
                </div>
                <div class="wrapper">
                    <div class=daily>
                        <span class="identifier">Kedvenc film kategóriám:</span>
                        <br>
                        <select name="chintime" class="inner">
                            <option <?php if($_SESSION["dailyTime"] == "Akció") echo "selected"; ?>>Akció</option>
                            <option <?php if($_SESSION["dailyTime"] == "Dokumentum") echo "selected"; ?>>Dokumentum</option>
                            <option <?php if($_SESSION["dailyTime"] == "Dráma") echo "selected"; ?>>Dráma</option>
                            <option <?php if($_SESSION["dailyTime"] == "Horror") echo "selected"; ?>>Horror</option>
                            <option <?php if($_SESSION["dailyTime"] == "Kaland") echo "selected"; ?>>Kaland</option>
                            <option <?php if($_SESSION["dailyTime"] == "Romantikus") echo "selected"; ?>>Romantikus</option>
                            <option <?php if($_SESSION["dailyTime"] == "Thriller") echo "selected"; ?>>Thriller</option>
                            <option <?php if($_SESSION["dailyTime"] == "Történelmi") echo "selected"; ?>>Történelmi</option>
                            <option <?php if($_SESSION["dailyTime"] == "Vígjáték") echo "selected"; ?>>Vígjáték</option>
                            <option <?php if($_SESSION["dailyTime"] == "Western") echo "selected"; ?>>Western</option>
                        </select>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="fav">
                        <span class="identifier">Az ideális film szerintem...</span>
                        <div class=inner>
                            <select name="favchin">
                                <option <?php if ($_SESSION["favChin"] == "< 1 óra") {echo "selected";} ?>>< 1 óra</option>
                                <option <?php if ($_SESSION["favChin"] == "1 - 2 óra") {echo "selected";} ?>>1 - 2 óra</option>
                                <option <?php if ($_SESSION["favChin"] == "2 - 3 óra") {echo "selected";} ?>>2 - 3 óra</option>
                                <option <?php if ($_SESSION["favChin"] == "> 3 óra") {echo "selected";} ?>>> 3 óra</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="longlove">
                        <span class="identifier">Sorozat vagy film?</span>
                        <div class=inner>
                        <select name="owns_chinchilla">
                            <option value="Sorozat"<?php if ($_SESSION["owner"] === "Sorozat") echo " selected"; ?>>Sorozat</option>
                            <option value="Film"<?php if ($_SESSION["owner"] === "Film") echo " selected"; ?>>Film</option>
                        </select>
                        </div>
                    </div>
                </div>
                <button class="savebtn" type="submit" name="submit_personal"><i class="fa-solid fa-floppy-disk"></i><span>Mentés</span></button>
            </form>
        </div>

        <div class="securityForm">
            <div class="wrapper">
                <form action="passwordmanager.inc.php" method="post">
                    <div class="passchanger">
                        <span class="identifier">Jelenlegi jelszó:</span>
                        <br>
                        <input class="inner" type="password" name="currpass">
                    </div>
                    <div class="passchanger">
                        <span class="identifier">Új jelszó:</span>
                        <br>
                        <input class="inner" type="password" name="newpass">
                    </div>
                    <div class="passchanger">
                        <span class="identifier">Új jelszó újra:</span>
                        <br>
                        <input class="inner" type="password" name="newpass2">
                    </div>
                    <button class="savebtn-new" type="submit" name="passchanger"><i class="fa-solid fa-floppy-disk"></i><span>Mentés</span></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/JS/userinter.js"></script>
</body>
</html>