<?php
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$subject = filter_var(trim($_POST['subject']),FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message']),FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost', 'root', '', 'login');


$sql = "INSERT INTO contact (email, subject, message)VALUES ('$email', '$subject', '$message')";
$mysql->query($sql);
$mysql->close();
echo "Mesajul a fost transmis cu succes";
echo "<br>";
echo "<a href='index.html'>Da click pentru a te intoarce pe pagina principala</a>";


