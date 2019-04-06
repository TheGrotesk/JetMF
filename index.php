<?php

    ini_set('display_errors',1);

    require('autoload.php');

    $settings = [
        'appName' => 'Template',
        'baseTemplate' => 'View/template.php'
    ];

    $app = new Application($settings);

    include('routes.php');

?>
