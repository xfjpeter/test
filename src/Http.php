<?php

namespace johnxu\test;

class Http
{
    private static $instance;

    public static function instance()
    {
        if (!self::$instance instanceof self)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get(string $uri)
    {
        var_dump($uri);
    }
}
