<?php

session_start();  
$_SESSION["name"] = "Scabaruggiolo";

include_once __DIR__ . "/functions.php";
include_once __DIR__ . "/database.php";


$psw_length = (int)$_GET["psw_length"];

if( !empty($psw_length) ) {
  $new_psw = generate_psw($psw_length, $psw_characters);

  $_SESSION["pw"] = $new_psw;

  header("Location: http://localhost/php-strong-password-generator/display.php");
  die();
}