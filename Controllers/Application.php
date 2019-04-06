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
    }

?>
