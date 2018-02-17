<?php

define('ROOT',str_replace('\\', '/', dirname(dirname(__FILE__))."/"));
require '../app/Core/Autoloader.php';

Autoloader::register();
new Dispatcher();
