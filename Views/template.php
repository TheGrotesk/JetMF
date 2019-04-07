<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $this->settings['appName']; ?></title>
    <link rel="stylesheet" type="text/css" href="/../Css/style.css">
  </head>
  <body>
    <div class="header">
      <div class="header-logo"><img src="/../vendor/jet-mf/jet-micro-framework/resourse/img/jetLogo.png" width="50px" height="50px"></div>
    </div>
    <div class="content" style="padding:20px; height:100%;">
      <?php
          require_once($view);
      ?>
    </div>
    <div class="footer">
      <ul>
       <li><a href="https://github.com/TheGrotesk/JetMF">GitHub</a></li>
       <li><a href="https://packagist.org/packages/jet-mf/jet-micro-framework">Packagist</a></li>
       <li><a href="https://github.com/TheGrotesk/JetMF/wiki">Wiki</a></li>
      </ul>
      <label>©JetMicroFramework. <?=date('Y');?></label>
    </div>
  </body>
</html>
