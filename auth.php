<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$password =md5($password."hasjnaskdjsad");
$mysql = new mysqli('localhost', 'root', '', 'login');

$sql = "SELECT login FROM users WHERE login='{$login}'";
$result = mysqli_query($mysql,$sql);
if (mysqli_num_rows($result) == 0) {
    echo "<script>alert('Login-ul nu exista');</script>";
    echo "<a href='register.html'>Incearca sa il inregistrezi</a>";
    exit();
}

if (mysqli_num_rows($result) > 0) {
    $sql = "SELECT * FROM users WHERE login='{$login}' AND password = '{$password}'";
    $mysql->query($sql);
    $result = mysqli_query($mysql,$sql);
    if (mysqli_num_rows($result) > 0) {
        setcookie('login', $login, time() + 3600,'/');
        echo $_COOKIE['login'];
        echo " te-ai logat cu succes";
        echo "<br><a href='index.html'>Da click pentru a te intoarce pe pagina principala</a>";
    }
    else {
        echo "<script>alert('Parola nu corespunde');</script>";
        echo "<a href='login.html'>Incearca sa te loghezi din nou</a>";
        exit();
    }
    $mysql->close();
}

