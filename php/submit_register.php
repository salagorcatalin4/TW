<?php
include 'valFunction.php';
include 'config.php';


$msg = array(
    "status" => 0,
    "message" => "Nu ati introdus toate datele"
);

    if(isset($_POST['email']) and isset($_POST['password']) and isset($_POST['confirmpassword'])){
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $password = mysqli_real_escape_string($db, trim($_POST['password']));
    $conpassword = mysqli_real_escape_string($db, trim($_POST['confirmpassword']));
        if ($db->connect_errno) {
            $msg["message"] = "Datele nu au fost introduse in baza!";
            $msg["status"] = 111;
        }
    if(emailVal($email) and passVal($password) and $password === $conpassword){
        $pass = md5($password);
        $sql = "INSERT INTO users (email, password) VALUES('$email','$pass')";
        mysqli_query($db, $sql); 
        $msg["message"] = "Datele au fost introduse in baza de date!";
        $msg["status"] = 1;
    }else{
        $msg['message'] = 'Email-ul este gresit!';
    }
    }else{
        $msg['message'] = "Spatiile sunt goale!";
    }

echo json_encode($msg);
?>