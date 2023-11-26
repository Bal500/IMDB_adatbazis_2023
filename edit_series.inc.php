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
            echo "<button id='backbtn' onclick='window.location.href=\"detailform.php?id=" . $_GET["id"] . "&typeof=series\"'><i class='fa-solid fa-arrow-left'></i></button>";
        ?>
        

        <?php
            require_once 'dbh.inc.php';

            if (isset($_POST['submit_series'])) {
                $id_edit = $_POST["id"];
                $cim = $_POST['series_title'];
                $rendezo = $_POST['series_director'];
                $megjelenes_eve = $_POST['series_publish'];
                $evadok = $_POST['series_season'];
                $reszek = $_POST['series_parts'];
                $leiras = $_POST['series_desc'];
                $szineszek = $_POST['actors'];
                $mufaj = $_POST['series_type'];

                $updateSeries = $conn->prepare("UPDATE sorozatok SET cim = ?, rendezo = ?, megjelenes_eve = ?, evadok = ?, reszek = ?, leiras = ?, szineszek = ?, mufaj = ? WHERE id = ?");
                $updateSeries->bind_param("sssssssi", $cim, $rendezo, $megjelenes_eve, $evadok, $reszek, $leiras, $szineszek, $mufaj, $id_edit);
                $updateSeries->execute();

                header("location: filmek.php");
                exit();
            }

            $id_edit = $_GET["id"];
            $getSeries = "SELECT * FROM sorozatok WHERE id = " . $id_edit;
            $result_series = $conn->query($getSeries);
            
            if ($result_series->num_rows > 0) {
                while($row = $result_series->fetch_assoc()) {
                    echo '
                        <form method="post" id="edit_existing">
                            <input type="hidden" name="id" value="' . $row['id'] . '">
                            <div id="seriesFields">
                                <div class="input">
                                    <input type="text" name="series_title" placeholder="Sorozat címe..." required value="' . $row["cim"] . '">
                                </div>
            
                                <div class="input">
                                    <input type="text" name="series_director" placeholder="A sorozat rendezője..." required value="' . $row["rendezo"] . '">
                                </div>

                                <div class="input">
                                    <input type="number" name="series_publish" placeholder="Első megjelenés éve..." required>
                                </div>

                                <div class="input">
                                    <input type="number" name="series_season" placeholder="Évadok száma..." required value="' . $row["evadok"] . '">
                                </div>
                    
                                <div class="input">
                                    <input type="number" name="series_parts" placeholder="Részek száma..." required value="' . $row["reszek"] . '">
                                </div>
            
                                <div class="input">
                                    <input type="text" name="series_type" placeholder="Műfaj..." required value="' . $row["mufaj"] . '">
                                </div>
            
                                <div class="input">
                                    <input type="text" name="actors" placeholder="Színészek... (vesszővel elválasztva)" required value="' . $row["szineszek"] . '">
                                </div>
                    
                                <div class="msgbox">
                                    <textarea name="series_desc" placeholder="Sorozat leírása..." cols="50" rows="10" required>' . $row["leiras"] . '</textarea>
                                </div>
            
                                <button class="film_savebtn" type="submit" name="submit_series"><i class="fa-solid fa-floppy-disk"></i><span>&nbsp;Mentés</span></button>
                            </div>
                        </form>
                    ';
                }
            }
        ?>
    </section>
</body>
</html>
