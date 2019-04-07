<?php

    class Application{

          public $settings = [];
          private $routes;

          function __construct($new)
          {
                $this->settings = $new;
                if($this->routes == 0)
                {
                  $this->render('','../resourse/welcomePage.html');
                }
          }

          function get($request, $func)
          {
              if($_SERVER['REQUEST_URI'] == $request)
              {
                  call_user_func($func);
                  $this->routes += 1;
              }
          }

          function render($class, $view)
          {
              if(array_key_exists('baseTemplate', $this->settings))
              {
                if(array_key_exists('folderControllers', $this->settings))
                {
                  if(file_exists($this->settings['folderControllers'].$class) && file_exists($this->settings['baseTemplate']))
                  {
                    require_once($this->settings['folderControllers'].$class);
                    require_once($this->settings['baseTemplate']);
                  }else
                  {
                    throw new \Exception("Class or view not found (base)", 1);

                  }
                }
                else
                {
                  if(file_exists($class) && file_exists($this->settings['baseTemplate']))
                  {
                    require_once($class);
                    require_once($this->settings['baseTemplate']);

                  }else
                  {
                    throw new \Exception("Class or view not found (base)", 1);

                  }
                }

              }else
              {
                if(array_key_exists('folderControllers', $this->settings))
                {
                  if(file_exists($this->settings['folderControllers'].$class) && file_exists($view))
                  {
                    require_once($this->settings['folderControllers'].$class);
                    require_once($view);
                  }else
                  {
                    throw new \Exception("Class or view not found (custom)", 1);
                  }
                }
                if(array_key_exists('folderViews', $this->settings))
                {
                  if(file_exists($class) && file_exists($this->settings['folderViews'].$view))
                  {
                    require_once($class);
                    require_once($this->settings['folderViews'].$view);
                  }else
                  {
                    throw new \Exception("Class or view not found (custom)", 1);
                  }
                }
                if(array_key_exists('folderViews', $this->settings) && array_key_exists('folderControllers', $this->settings))
                {
                  if(file_exists($this->settings['folderControllers'].$class) && file_exists($this->settings['folderViews'].$view))
                  {
                    require_once($this->settings['folderControllers'].$class);
                    require_once($this->settings['folderViews'].$view);
                  }else
                  {
                    throw new \Exception("Class or view not found (custom)", 1);
                  }
                }


              }
          }
    }

?>
