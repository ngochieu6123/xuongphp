<?php
if(!function_exists('require file')){
    function require_file($pathFolder){
        
        $file = array_diff(scandir($pathFolder),['.','..']);
        foreach($file as $file){
            require_once $pathFolder.$file;
        }
    }
if(!function_exists('debug')){
    function debug($data){
        echo "<pre>";
        print_r($data);
        die;
    }
}
}
