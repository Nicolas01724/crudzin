<?php


class Router {

    static function get_uri() {
        $uri = $_SERVER["REQUEST_URI"];
        return $uri;
    }


    static function add(string $path, string $controller) {
        $uri = self::get_uri();

        if ($uri == $path) {
            include ROOT_PATH . "/src/controller/$controller.php";
        }

    }

}