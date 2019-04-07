<?php

    ini_set('display_errors',1);
    define('contrPath', 'Controllers/');
    define('viewPath', 'Views/');

    require('vendor/jet-mf/jet-micro-framework/autoload.php');

    $settings = [
        'appName' => 'Guardians',
        'baseTemplate' => 'Views/template.php',
        // 'folderControllers' => 'Controllers/',
        // 'folderViews' => 'Views/'
    ];

    $app = new Application($settings);

    include('routes.php');

?>
