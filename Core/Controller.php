<?php

namespace Core;
class Controller {
    
    protected function result($controller, $file, $data = array()){
        extract($data);
        include  "Views".DS.$controller.DS.$file.".php";
   	}
    
}
