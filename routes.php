<?php

    $app->get('/',function() use ($app){
        $app->render(contrPath.'MainController.php', viewPath.'MainPage/MainPage.php');
    });

?>
