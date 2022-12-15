<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your New Pw</title>
  </head>
  <body>
    <h2> Ciao  <?php echo $_SESSION["name"] ?></h2>
    <h2> La tua Nuova Password è <?php echo $_SESSION["pw"] ?> </h2>
  </body>
</html>