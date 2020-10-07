<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <?php include_once "src/Partials/php/db.php";?>
  <body>
    <header>
      <div class="container">
        <img src="img/logo.png" alt="">
      </div>
    </header>

    <main>

      <div class="container">
        <ul>
          <?php foreach($database as $element){ ?>
          <li>
            <div class="poster">
            <?php echo '<img src="'.$element["poster"].'" alt="">'; ?>

              <div class="info">
                <?php echo "<h3>".$element["title"]."</h3>" ?>
                <?php echo "<h4>".$element["author"]."</h4>" ?>
                <?php echo "<h5>".$element["year"]."</h5>" ?>
              </div>

            </div>
          </li>
        <?php } ?>
        </ul>
      </div>

    </main>
  </body>
</html>
