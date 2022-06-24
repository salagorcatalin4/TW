<?php
setcookie('login', $login, time() -3600,'/');
header('Location: /index.html');