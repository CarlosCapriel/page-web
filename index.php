<php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- CSS only -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Carlos Capriel</title>
  </head>
    <div class="row">
    <?php include 'views/header.php'?>
    </div>
    <div class="container">
    <body class="grey darken-1">
    <div class="row">      
      <main>
        <?php include 'controllers/routing.php' ?>       
      </main>
    </div>
    </div>
    <?php include 'views/footer.php' ?>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
