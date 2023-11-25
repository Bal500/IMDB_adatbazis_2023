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
    <link rel="stylesheet" href="./CSS/table.css">
    <link rel="stylesheet" href="./CSS/buttons.css">
    <link href="./assets/css/fontawesome.css" rel="stylesheet">
    <link href="./assets/css/solid.css" rel="stylesheet">
    <link rel="icon" href="./assets/kepek/imdb_icon.ico">
</head>
<body>
    <div class="icon-bar">
        <a class="active" href="filmek.php"><i class="fa-solid fa-film"></i></a>
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='inactive' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='inactive' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>

    <section id="filmsection" class="filmwrap">
        <h2>Új film hozzáadása</h2>
        <br>

        <button id="backbtn" onclick="window.location.href='filmek.php'"><i class="fa-solid fa-arrow-left"></i></button>

        <fieldset class="field">
            <div>
                <input type="radio" id="typeof_film" name="typeof" value="Film" onclick="showHideFields()">
                    <label for="typeof_film">Film</label>
                <input type="radio" id="typeof_series" name="typeof" value="Sorozat" onclick="showHideFields()">
                    <label for="typeof_series">Sorozat</label>
                <input type="radio" id="typeof_actor" name="typeof" value="Színész" onclick="showHideFields()">
                    <label for="typeof_series">Színész</label>
            </div>

            <form method="post" action="new_film.inc.php">
                <div id="filmFields" style="display: none;">
                    <div class="input">
                        <input type="text" name="film_title" placeholder="Film címe..." required>
                    </div>
        
                    <div class="input">
                        <input type="text" name="film_director" placeholder="Rendező..." required>
                    </div>

                    <div class="input">
                        <input type="number" name="film_length" placeholder="Film hossza... (percben)" required>
                    </div>

                    <div class="input">
                        <input type="number" name="film_publish" placeholder="Megjelenés éve..." required min="1900" max="2023">
                    </div>
        
                    <div class="input">
                        <input type="text" name="film_type" placeholder="Műfaj..." required>
                    </div>

                    <div class="input">
                        <input type="text" name="actors" placeholder="Színészek... (vesszővel elválasztva)" required>
                    </div>
        
                    <div class="msgbox">
                        <textarea name="film_desc" placeholder="Film leírása..." cols="50" rows="10" required></textarea>
                    </div>

                    <button class="film_savebtn" type="submit" name="submit_film"><i class="fa-solid fa-floppy-disk"></i><span>&nbsp;Mentés</span></button>
                </div>
            </form>

            <form method="post" action="new_series.inc.php">
                <div id="seriesFields" style="display: none;">
                    <div class="input">
                        <input type="text" name="series_title" placeholder="Sorozat címe..." required>
                    </div>

                    <div class="input">
                        <input type="text" name="series_director" placeholder="A sorozat rendezője..." required>
                    </div>
        
                    <div class="input">
                        <input type="number" name="series_season" placeholder="Évadok száma..." required>
                    </div>
        
                    <div class="input">
                        <input type="number" name="series_parts" placeholder="Részek száma..." required>
                    </div>

                    <div class="input">
                        <input type="text" name="series_type" placeholder="Műfaj..." required>
                    </div>

                    <div class="input">
                        <input type="text" name="actors" placeholder="Színészek... (vesszővel elválasztva)" required>
                    </div>
        
                    <div class="msgbox">
                        <textarea name="series_desc" placeholder="Sorozat leírása..." cols="50" rows="10" required></textarea>
                    </div>

                    <button class="film_savebtn" type="submit" name="submit_series"><i class="fa-solid fa-floppy-disk"></i><span>&nbsp;Mentés</span></button>
                </div>
            </form>

            <form method="post" action="new_actor.inc.php">
                <div id="actorFields" style="display: none;">
                    <div class="input">
                        <input type="text" name="actor_name" placeholder="A színész neve..." required>
                    </div>
        
                    <div class="input">
                        <input type="date" name="actor_dob" required>
                    </div>
        
                    <div class="input">
                        <input type="tetx" name="actor_nationality" placeholder="A színész állampolgársága..." required>
                    </div>

                    <button class="film_savebtn" type="submit" name="submit_actor"><i class="fa-solid fa-floppy-disk"></i><span>&nbsp;Mentés</span></button>
                </div>
            </form>
        </fieldset>
    </section>
    <script src="./assets/JS/filmAdding.js"></script>
</body>
</html>