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

        if(file_exists('../app/Core/'.$class.'.php')){
            require '../app/Core/'.$class.'.php';
        }else if(file_exists('../app/Controller/' . $class . '.php')){
            require '../Controller/' . $class . '.php';
        }

    }

}