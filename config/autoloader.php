<?php

spl_autoload_register('myloader');

function myloader($clasName){

    $dirs = [ $_SESSION['root_dir']."/models/", $_SESSION['root_dir'] . "/controller/"];

    foreach($dirs as $search_dir){
        $file_name = $search_dir.$clasName.'.php';
    
        if(file_exists($file_name)){
            require_once $file_name;
        }

    }

}


?>