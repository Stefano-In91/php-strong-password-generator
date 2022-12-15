<?php 
  $psw_length = (int)$_GET["psw_length"];

  $letters = ["a","b","c","d","e","f","g","h","i","j"];
  $capital_letters = ["A","B","C","D","E","F","G","H","I","J"];
  $special_characters = ["|","!","£","$","%","/","(",")","=","?"];
  $numbers = ["0","1","2","3","4","5","6","7","8","9"];

  $psw_characters = [
    $letters,
    $capital_letters,
    $special_characters,
    $numbers
  ];

  if( !empty($psw_length) ) {
    $new_pw = [];
    for ($i = 0; $i < $psw_length; $i++ ) {
      // randomizzazione tipo di carattere
      $random_type = $psw_characters[rand(0, count($psw_characters)-1)];
      // randomizzazione carattere in tipo selezionato
      $random_character = $random_type[rand(0, count($random_type)-1)];
      $new_pw[] = $random_character;
    };

    var_dump(implode($new_pw));
  };
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psw Generator</title>
  </head>
  <body>
    <form action="index.php" method="GET">
      <label for="psw_length">Scegliere lunghezza password</label>
      <input  id="psw_length" name="psw_length" type="number" min="3" max="20" placeholder="3 >= num <= 20">
      <button>Invia</button>
    </form>
  </body>
</html>