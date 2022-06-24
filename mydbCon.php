<?php
$hName='localhost';
$uName='root';
$password='';
$dbName = "gogoasa_3";
$dbCon = mysqli_connect($hName,$uName,$password,"$dbName");

mysqli_query($dbCon,"SET FOREIGN_KEY_CHECKS=0");
if(!$dbCon){
    die('Could not Connect MySql Server:' .mysql_error());
}
?>