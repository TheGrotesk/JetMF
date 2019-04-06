<?php

    ini_set('display_errors',1);

    require('autoload.php');

    $settings = [
        'appName' => 'Guardians',
    ];

    $app = new Application($settings);

    $app->get('/', function(){
          print("heloo");
    });

    $app->get('/main', function(){
        print("main");
    });

    echo $app->settings['appName'];

?>
