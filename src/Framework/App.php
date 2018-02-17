<?php

namespace Framework;

class App{

    function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        echo "Bonjour/Hello <br>".$url;
    }

}