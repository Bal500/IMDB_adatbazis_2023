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
        <a class="inactive" href="elerhetoseg.php"><i class="fa-solid fa-phone"></i></a>
        <a class="active" href="filmek.php"><i class="fa-solid fa-film"></i></a>
        <?php
            if (isset($_SESSION["id"])) {
                echo "<a class='inactive' href='user.php'><i class='fa-solid fa-user'></i></a>";
            } else {
                echo "<a class='inactive' href='login.php'><i class='fa-solid fa-user'></i></a>";
            }
        ?>
    </div>

    <section id="filmsection" class="filmwrap">
        <br>
        <?php
            echo "<button id='backbtn' onclick='window.location.href=\"detailform.php?id=" . $_GET["id"] . "&typeof=movie\"'><i class='fa-solid fa-arrow-left'></i></button>";
        ?>
        

        <?php
            require_once 'dbh.inc.php';

            if (isset($_POST['submit_film'])) {
                $id_edit = $_GET["id"];
                $cim = $_POST['film_title'];
                $rendezo = $_POST['film_director'];
                $jatekido = $_POST['film_length'];
                $megjelenes_eve = $_POST['film_publish'];
                $leiras = $_POST['film_desc'];
                $szineszek = $_POST['actors'];
                $mufaj = $_POST['film_type'];
            
                $updateFilm = $conn->prepare("UPDATE filmek SET cim = ?, rendezo = ?, leiras = ?, szineszek = ?, jatekido = ?, mufaj = ?, megjelenes_eve = ? WHERE id = ?");
                $updateFilm->bind_param("sssssssi", $cim, $rendezo, $leiras, $szineszek, $jatekido, $mufaj, $megjelenes_eve, $id_edit);
                $updateFilm->execute();

                header("location: filmek.php");
            }

            $id_edit = $_GET["id"];
            $getFilm = "SELECT * FROM filmek WHERE id = " . $id_edit;
            $result_film = $conn->query($getFilm);
            
            if ($result_film->num_rows > 0) {
                while($row = $result_film->fetch_assoc()) {
                    echo '
                        <form method="post">
                            <div id="filmFields">
                                <div class="input">
                                    <input type="text" name="film_title" placeholder="Film címe..." required value="' . $row["cim"] . '">
                                </div>
                    
                                <div class="input">
                                    <input type="text" name="film_director" placeholder="Rendező..." required value="' . $row["rendezo"] . '">
                                </div>
            
                                <div class="input">
                                    <input type="number" name="film_length" placeholder="Film hossza... (percben)" required value="' . $row["jatekido"] . '">
                                </div>
            
                                <div class="input">
                                    <input type="number" name="film_publish" placeholder="Megjelenés éve..." required min="1900" max="2023" value="' . $row["megjelenes_eve"] . '">
                                </div>
                    
                                <div class="input">
                                    <input type="text" name="film_type" placeholder="Műfaj..." required value="' . $row["mufaj"] . '">
                                </div>
            
                                <div class="input">
                                    <input type="text" name="actors" placeholder="Színészek... (vesszővel elválasztva)" required value="' . $row["szineszek"] . '">
                                </div>
                    
                                <div class="msgbox">
                                    <textarea name="film_desc" placeholder="Film leírása..." cols="50" rows="10" required>' . $row["leiras"] . '</textarea>
                                </div>
            
                                <button class="film_savebtn" type="submit" name="submit_film"><i class="fa-solid fa-floppy-disk"></i><span>&nbsp;Mentés</span></button>
                            </div>
                        </form>
                    ';
                }
            }
        ?>
    </section>
</body>
</html>
