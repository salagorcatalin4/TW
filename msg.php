<?php
// foo.php
$errors = array (
    1 => "Inregistrarea a noua a fost adaugata cu succes",
    2 => "Inregisrarea a fost editata cu succes",
    3 => "Inregistrarea a fost stearsa cu succes",
    4 => "A avut loc eroare incercati din nou",
);
$error_id = isset($_GET['msg']) ? (int)$_GET['msg'] : 0;
if ($error_id != 0 && in_array($error_id, [1,2,3,4])) {
    echo $errors[$error_id];
}else{
    echo 'Aici poti adauga,sterge si edita un personaj';
}
?>