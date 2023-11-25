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
        <button id="backbtn" onclick="window.location.href='filmek.php'"><i class="fa-solid fa-arrow-left"></i></button>

        <?php
            require_once 'dbh.inc.php';

            if (isset($_POST['submit_actor'])) {
                $id_edit = $_POST["id"];
                $nev = $_POST['actor_name'];
                $szuletesi_datum = $_POST['actor_dob'];
                $allampolgarsag = $_POST['actor_nationality'];

                $updateActor = $conn->prepare("UPDATE szineszek SET nev = ?, szuletesi_datum = ?, allampolgarsag = ? WHERE id = ?");
                $updateActor->bind_param("sssi", $nev, $szuletesi_datum, $allampolgarsag, $id_edit);
                $updateActor->execute();

                header("location: filmek.php");
                exit();
            }

            $id_edit = $_GET["id"];
            $getActor = "SELECT * FROM szineszek WHERE id = " . $id_edit;
            $result_actor = $conn->query($getActor);
            
            if ($result_actor->num_rows > 0) {
                while($row = $result_actor->fetch_assoc()) {
                    echo '<form method="post" id="edit_existing">
                            <input type="hidden" name="id" value="' . $row['id'] . '">
                            <div id="actorFields">
                                <div class="input">
                                    <input type="text" name="actor_name" placeholder="A színész neve..." required value="' . $row['nev'] . '">
                                </div>

                                <div class="input">
                                    <input type="date" name="actor_dob" required value="' . $row['szuletesi_datum'] . '">
                                </div>

                                <div class="input">
                                    <input type="tetx" name="actor_nationality" placeholder="A színész állampolgársága..." required value="' . $row['allampolgarsag'] . '">
                                </div>

                                <button id="edit_existing_button" class="film_savebtn" type="submit" name="submit_actor"><i class="fa-solid fa-floppy-disk"></i><span>&nbsp;Mentés</span></button>
                            </div>
                        </form>
                    ';
                }
            }
        ?>
    </section>
</body>
</html>
