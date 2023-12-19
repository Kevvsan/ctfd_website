<?php
session_start();
$tomailaddress;
$name = $_POST["name"];
$subject = $_POST["subject"];
$message = $_POST["message"];

if($_POST["message"]){
    mail($tomailaddress, $subject, $message, "From: $name");
}
?>