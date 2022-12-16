<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psw Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="mb-r">Genera la tua Password</h1>
      <form action="generator.php" method="GET">
        <div>
          <label class="mb-3" for="psw_length">Scegliere lunghezza password</label>
          <input class="form-control mb-3"  id="psw_length" name="psw_length" type="number" min="3" max="20" placeholder="3 >= num <= 20">
        </div>
        <button class="btn btn-primary">Invia</button>
      </form>
    </div>
  </body>
</html>