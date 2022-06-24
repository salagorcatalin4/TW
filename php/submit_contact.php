<?php
include 'valFunction.php';
include 'config.php';

$msg = array(
    "status" => 0,
    "message" => ""
);

if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['comment'])){
    $name = mysqli_real_escape_string($db, trim($_POST['name']));
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $comment = mysqli_real_escape_string($db, trim($_POST['comment']));

    if(nameVal($name) and emailVal($email) and commentVal($comment)){
    $sql = "INSERT INTO contact (nume,email, comment) VALUES('$name','$email','$comment')";
    mysqli_query($db, $sql);
    $msg["message"] = "Datele au fost introduse in baza de date!";
    $msg["status"] = 1;
  }else{
    $msg["message"] = "The fields are wrong!";
  }
}else{
  $msg["message"] = "Spatiile sunt goale!";
}
echo json_encode($msg);
?>