<?php
$db = mysqli_connect('localhost','root','','ajx');

//Functii register
function emailVal($email) {
    
    if (empty($email)) {
        $msg["message"] = "Email is required";
      } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg["message"] = "Invalid email format";
        }
        else{
            return true;
        }
  }

function passVal($password){
    if (empty($password)) {
        $msg["message"] = "Password is required";
      } 

    elseif(strlen($password)<8){
        $msg["message"] = "Password must have at least 8 characters!";
    }
    else{
            return true;
        }
    }


//Functii Contact
function nameVal($fname){
    if(empty($fname)){
      $msg['message'] = "The name is missing!";
    }else{
      return true;
    }
  }
  
  
  function commentVal($comment){
    if(empty($comment)){
      $msg["message"] = "Campul este gol!";
    }
    elseif (strlen($_POST['comment']) < 20){
      $msg["message"] = "Sunt prea putine cuvinte";
  }else{
    return true;
  }
  }

?>