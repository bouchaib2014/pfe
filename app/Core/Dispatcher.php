<?php

class Dispatcher{

    var $request;

    function __construct(){
        $this->request = new Request();
        Router::parse($this->request);
        print_r($this->request);
        $this->loadController();
    }

    function loadController(){
        $name = ucfirst($this->request->controller).'Controller';
        $file = '/app/Controller/'.$name.'.php';
        echo $file;
        if(file_exists($file)){
            new $name();
        }

    }

}