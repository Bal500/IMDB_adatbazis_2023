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
    <link rel="stylesheet" href="./CSS/toltokep.css">
    <link rel="stylesheet" href="./CSS/back.css">
    <link rel="stylesheet" href="./CSS/sidebar.css">
    <link rel="stylesheet" href="./CSS/userinterface.css">
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

            <div class="privacy">
                <button class="defaultbtn"><i class="fa-solid fa-user-secret"></i><span>Láthatóság</span></button>
            </div>

            <div class="security">
                <button class="defaultbtn"><i class="fa-solid fa-lock"></i><span>Biztonság</span></button>
            </div>

            <div class="chat">
                <button class="defaultbtn"><i class="fa-solid fa-comments"></i><span>Chat</span></button>
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
                        <span class="identifier">Bio:</span>
                            <textarea class="inner" name="bio" placeholder="Mesélj magadról, hogy jobban megismerhessünk..."><?php echo $_SESSION['bio'];?></textarea>
                    </div>
                    
                </div>
                <div class="wrapper">
                    <div class=daily>
                        <span class="identifier">Napi csincsillával töltött idő:</span>
                        <br>
                        <select name="chintime" class="inner">
                            <option <?php if($_SESSION["dailyTime"]=="Nincs csincsillám") echo "selected"; ?>>Nincs csincsillám</option>
                            <option <?php if($_SESSION["dailyTime"]=="Kevesebb, mint 1 óra") echo "selected"; ?>>Kevesebb, mint 1 óra</option>
                            <option <?php if($_SESSION["dailyTime"]=="1-2 óra") echo "selected"; ?>>1-2 óra</option>
                            <option <?php if($_SESSION["dailyTime"]=="3-5 óra") echo "selected"; ?>>3-5 óra</option>
                            <option <?php if($_SESSION["dailyTime"]=="Több, mint 5 óra") echo "selected"; ?>>Több, mint 5 óra</option>
                        </select>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="fav">
                        <span class="identifier">Kedvenc csincsilla a boltunkból:</span>
                        <div class=inner>
                            <select name="favchin">
                                <option <?php if ($_SESSION["favChin"] == "Mindet imádom!") {echo "selected";} ?>>Mindet imádom!</option>
                                <option <?php if ($_SESSION["favChin"] == "Puffancs") {echo "selected";} ?>>Puffancs</option>
                                <option <?php if ($_SESSION["favChin"] == "Kókusz") {echo "selected";} ?>>Kókusz</option>
                                <option <?php if ($_SESSION["favChin"] == "Hamu") {echo "selected";} ?>>Hamu</option>
                                <option <?php if ($_SESSION["favChin"] == "Nutella") {echo "selected";} ?>>Nutella</option>
                                <option <?php if ($_SESSION["favChin"] == "Mochi") {echo "selected";} ?>>Mochi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="owner">
                        <span class="identifier">Van csincsillád?</span>
                        <div class=inner>
                        <select name="owns_chinchilla">
                            <option value="Nincs"<?php if ($_SESSION["owner"] === "Nincs") echo " selected"; ?>>Nincs</option>
                            <option value="Van"<?php if ($_SESSION["owner"] === "Van") echo " selected"; ?>>Van</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="longlove">
                        <span class="identifier">Mióta imádod a csincsillákat?</span>
                        <br>
                            <input class="inner" type="number" name="year_selector" id="year_selector" min="1900" max="2099" step="1" value="<?php echo $_SESSION["loveTime"];?>">
                    </div>
                </div>
                <button class="savebtn" type="submit" name="submit_personal"><i class="fa-solid fa-floppy-disk"></i><span>Mentés</span></button>
            </form>
        </div>
        
        <div class="privacyForm">
            <form>
                <div class="wrapper">
                    <div class=left>
                        <span class="identifier">Születési idő:</span>
                        <select name="pubpri" class="inner">
                            <option>Publikus</option>
                            <option>Privát</option>
                        </select>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="left">
                        <span class="identifier">Bio:</span>
                        <br>
                        <select name="pubpri" class="inner">
                            <option>Publikus</option>
                            <option>Privát</option>
                        </select>
                    </div>
                </div>
                <div class="wrapper">
                    <div class=left>
                        <span class="identifier">Napi csincsillával töltött idő:</span>
                        <br>
                        <select name="pubpri" class="inner">
                            <option>Publikus</option>
                            <option>Privát</option>
                        </select>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="right">
                        <span class="identifier">Kedvenc csincsilla a boltunkból:</span>
                        <br>
                        <select name="pubpri" class="inner">
                            <option>Publikus</option>
                            <option>Privát</option>
                        </select>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="right2">
                        <span class="identifier">Van csincsillád?</span>
                        <br>
                        <select name="pubpri" class="inner">
                            <option>Publikus</option>
                            <option>Privát</option>
                        </select>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="right3">
                        <span class="identifier">Mióta imádod a csincsillákat?</span>
                        <br>
                        <select name="pubpri" class="inner">
                            <option>Publikus</option>
                            <option>Privát</option>
                        </select>
                    </div>
                </div>
                <button class="savebtn"><i class="fa-solid fa-floppy-disk"></i><span>Mentés</span></button>
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

        <div class="chatForm">
            <div class="chat-container">
                <div class="chat-header">
                    <h2>Chat</h2>
                </div>
                <div class="chat-messages">
                    <!-- meglévő üzenetek megjelenítése -->
                </div>
                <form id="chat-form">
                    <div class="chat-input">
                        <input type="text" name="message" placeholder="Írd ide az üzeneted...">
                        <button class="chatbtn" type="submit" name="send"><i class="fa-solid fa-share"></i><span>Küldés</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/JS/userinter.js"></script>
    <script src="./assets/JS/chat.js"></script>
</body>
</html>