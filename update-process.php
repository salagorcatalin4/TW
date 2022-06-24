<?php
if(count($_POST)>0){
    include 'mydbCon.php';
    $query = "UPDATE personaje set id_personaj='" . $_POST['id_personaj'] . "', nume_personaj='" . $_POST['nume_personaj'] . "', id_ocupatie='" . $_POST['id_ocupatie'] . "', id_rezultat='" . $_POST['id_rezultat'] . "' WHERE id_personaj='" . $_POST['id_personaj'] . "'"; // update form data from the database
    if (mysqli_query($dbCon, $query)) {
        $msg = 2;
    } else {
        $msg = 4;
    }
}
header ("Location: personaje.php?msg=".$msg."");
?>