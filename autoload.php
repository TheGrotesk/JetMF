<?php

    $autoload = [
      __DIR__.'core/',
    ];

    for($i = 0; $i < count($autoload); $i++) {

      if(is_dir($autoload[$i]))
      {
         foreach (glob("{$autoload[$i]}/*.php") as $filename)
         {
             require_once($filename);
         }
      }
      elseif(file_exists($autoload[$i]))
      {
        require_once($autoload[$i]);
      }
      else
      {
        throw new \Exception("Error while loading file or directory '{$autoload[$i]}'", 1);

      }
    }
 ?>
