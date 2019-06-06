<?php

namespace johnxu\test;

class Http
{
    private static $instance;

    public static function instance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get(string $uri)
    {
        var_dump($uri);
    }

    public function post()
    {
        var_dump('http - post');
    }

    public function delete()
    {
        var_dump('http - delete');
    }

    public function put()
    {
        var_dump('http - put');
    }
}
