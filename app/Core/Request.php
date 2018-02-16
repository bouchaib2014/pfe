<?php

class Request{

    var $url;
    var $controller;
    var $action;
    var $params = [];

    function __construct(){
        if(isset($_SERVER['PATH_INFO'])){
            $this->url = $_SERVER['PATH_INFO'];
        }else{
            $this->url = $_SERVER['REQUEST_URI'];
        }
    }

}