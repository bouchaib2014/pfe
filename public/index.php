<?php

use Framework\App;
use Core\Dispatcher;

define('ROOT',str_replace('\\', '/', dirname(dirname(__FILE__))."/"));

require '../vendor/autoload.php';

new App();

new Dispatcher();


