<?php
/**
 * Class Autoloader
 */

namespace Core;

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

        if(file_exists(ROOT.'app/Core/'.$class.'.php')){
            require ROOT.'app/Core/'.$class.'.php';
        }else if(file_exists(ROOT.'app/Controller/' . $class . '.php')){
            require ROOT.'app/Controller/' . $class . '.php';
        }

    }

}