<?php

function generate_psw($psw_length, $psw_characters) {
  $new_psw = "";
  for ($i = 0; $i < $psw_length; $i++ ) {
    // randomizzazione tipo di carattere
    $random_type = $psw_characters[rand(0, count($psw_characters)-1)];
    // randomizzazione carattere in tipo selezionato
    $random_character = $random_type[rand(0, count($random_type)-1)];
    $new_psw .= $random_character;
  };
  return $new_psw;
}