<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$password =md5($password."hasjnaskdjsad");
$mysql = new mysqli('localhost', 'root', '', 'login');

$sql = "SELECT login FROM users WHERE login='{$login}'";
$result = mysqli_query($mysql,$sql) or die("Query unsuccessful") ;
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Login-ul deja exista');</script>";
    echo "<a href='register.html'>Incearca din nou</a>";
    exit();
}

if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO users (login, name, password)VALUES ('$login', '$name', '$password')";
    $mysql->query($sql);
    $mysql->close();
    header('Location: /login.html');
    exit();
}
