<?php 
  include_once __DIR__ . "/functions.php";
  include_once __DIR__ . "/database.php";


  $psw_length = (int)$_GET["psw_length"];

  if( !empty($psw_length) ) {
    $new_psw = generate_psw($psw_length, $psw_characters);
  }
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
    <?php if( !empty($psw_length)) {?>
      <h1> <?php echo $new_psw ?> </h1>
    <?php }?>
  </body>
</html>