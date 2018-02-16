<?php

class Router{

    /**
     * permet de parser une url
     * @param $url Url à parse
     * @return boolean contenant les parametres
     */
    static function parse($request){
        $url = trim($request->url, '/');
        $params = explode('/', $url);
        $request->controller = isset($params[0]) ? $params[0] : 'index';
        $request->action =  isset($params[1]) ? $params[1] : '';
        $request->params = array_slice($params, 2);
        return true;
    }

}