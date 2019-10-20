<?php
require_once "config.php";

spl_autoload_register(function($file){
    if(file_exists('controller/'.$file.'.php')) {
        require_once 'controller/'.$file.'.php';
    }
    if(file_exists('model/'.$file.'.php')) {
        require_once 'model/'.$file.'.php';
    }
    if(file_exists('model/cartorios/'.$file.'.php')) {
        require_once 'model/cartorios/'.$file.'.php';
    }
});