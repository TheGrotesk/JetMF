# **Jet micro framework**

Micro framework for creating simple and fast sites.

## **Installing**

First of all download this repository.
The next step is set up your application. In your project folder open *index.php* - the main file of your project.

```php

    ini_set('display_errors',1);

    require('autoload.php');

    $settings = [
        'appName' => 'Template',
        'baseTemplate' => 'View/template.php'
    ];

    $app = new Application($settings);

    include('routes.php');


```
