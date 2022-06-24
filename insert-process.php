<?php

if (count($_POST) > 0) {
    include 'mydbCon.php';
    $nume_personaj = $_POST['nume_personaj'];
    $id_ocupatie = $_POST['id_ocupatie'];
    $id_rezultat = $_POST['id_rezultat'];
    $id_accesoriu = $_POST['id_accesoriu'];
    $id_tip_personaj = $_POST['id_tip_personaj'];

    $query = "INSERT INTO personaje (nume_personaj, id_rezultat,id_accesoriu, id_ocupatie,id_tip_personaj)
VALUES ('$nume_personaj','$id_rezultat','$id_accesoriu','$id_ocupatie','$id_tip_personaj')";


    if (mysqli_query($dbCon, $query)) {
        $msg = 1;
    } else {
        $msg = 4;
    }
}
header("Location: personaje.php?msg=" . $msg . "");
