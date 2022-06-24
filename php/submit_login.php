<?php
include 'valFunction.php';
include 'config.php';


$msg = array(
    "status" => 0,
    "message" => ""
);

if(isset($_POST['email']) and isset($_POST['password'])){
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $password = md5(mysqli_real_escape_string($db, trim($_POST['password'])));

    if(emailVal($email) and passVal($password)){
        $pass = trim($password); 
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($db, $sql);
    
        if(mysqli_num_rows($result) == 1){
           $msg['status'] = 1;
           $msg['message'] = "Logarea a avut loc cu succes!";

        }else{
    $msg['message'] = "Email-ul sau parola sunt gresite!";

        }
}
}else{
    $msg['message'] = "Spatiile sunt goale!";
}

echo json_encode($msg);
?>