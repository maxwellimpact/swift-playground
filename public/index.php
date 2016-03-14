<?php
  include 'includes/swift.php';
  $swift = new Swift;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Swift Playground Online</title>
  </head>
  <body>
    <h1>Swift Playground Online</h1>
    <p>
      Your server was isntalled successfully.
    </p>
    <p>
      <?=$swift->getVersion()?>
    </p>
    <p>
      <?php
        echo $swift->run("var x=1;print(x)");
      ?>
    </p>
  </body>
</html>
