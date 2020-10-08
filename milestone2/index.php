<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi</title>
    <link rel="stylesheet" href="dist/app.css">
    <?php include_once 'db.php'; ?>
  </head>
  <body>

    <header>
      <div class="container">
        <img src="img/logo.png" alt="logo">
      </div>
    </header>


    <main>
      <div class="container">
        <ul>
        </ul>
      </div>
    </main>

  <script id="entry-template" type="text/x-handlebars-template">
    <li>
      <img src="{{poster}}" alt="poster">
    </li>
  </script>


  <script type="text/javascript" src="dist/app.js">

  </script>
  </body>
</html>
