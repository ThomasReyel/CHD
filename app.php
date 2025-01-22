<?php

class App 
{ 
    public static function run () {

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        Route::rotear ($uri, $method);

    }
}
