<?php
/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        require '../app/Core/Dispatcher.php';
        if(class_exists( $class . '.php')){
            require $class . '.php';
        }else if(class_exists('../app/Core/' . $class . '.php')){
            require '../Controller/' . $class . '.php';
        }

    }

    /**
     * require 'autoloader.php'; 
     * Autoloader::register(); 
     */
}