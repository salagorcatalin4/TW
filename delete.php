<?php
include 'mydbCon.php';
$query = "DELETE FROM personaje WHERE id_personaj ='" . $_GET["id_personaj"] . "'";
if (mysqli_query($dbCon, $query)) {
    $msg = 3;
} else {
    $msg = 4;
}
header ("Location: personaje.php?msg=".$msg."");
?>