<?php

  $app->get('/', function() use ($app){

      $app->render('Controllers/Locations/MainPage.php', 'View/MainPage/mainPage.html');

  });

  $app->get('/main', function(){
      print("main");
  });

?>
