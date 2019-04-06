<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $this->settings['appName']; ?></title>
  </head>
  <body>
      <div class="header" style="width:100%;height:50px;background-color:black;"></div>
      <?php
        require_once($view);
      ?>
  </body>
</html>
