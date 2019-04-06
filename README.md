# **Jet micro framework**

Micro framework for creating simple and fast sites.

- [x] very fast
- [x] easy to use
- [x] open source

## **Installing**

First of all download this repository.
The next step is set up your application. In your project folder open *index.php* - the main file of your project.

**index.php**
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

Next we must write some basic settings of our project.

```php

    $settings = [
        'appName' => 'Template',
        'baseTemplate' => 'View/template.php'
    ];

```

- [x] appName is the name of your project
- [x] baseTemplate is the base view of your site, like base style of the every page. In this file you can write your own header and footer.
