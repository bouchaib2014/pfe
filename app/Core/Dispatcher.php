<?php

class Dispatcher{

    var $request;

    function __construct(){
        $this->request = new Request();
        Router::parse($this->request);
        print_r($this->request);
        $controller = $this->loadController();
        call_user_func_array(array($controller, $this->request->action), $this->request->params);
    }

    function loadController(){
        $name = ucfirst($this->request->controller).'Controller';
        $file = ROOT.'app/Controller/'.$name.'.php';
        if(!file_exists($file)){
            return null;
        }else{
            return new $name;
        }
    }

}