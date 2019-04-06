<?php

    class Application{

          public $settings = [];

          function __construct($new)
          {
                $this->settings = $new;
          }

          function get($request, $func)
          {
              if($_SERVER['REQUEST_URI'] == $request)
              {
                  call_user_func($func);
              }
          }

          function render($class, $view)
          {
              if(array_key_exists('baseTemplate', $this->settings))
              {
                  require_once($class);
                  require_once($this->settings['baseTemplate']);
                  
              }else
              {
                require_once($class);
                require_once($view);
              }
          }
    }

?>
