<?php

namespace Core;

class App
{
    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function resolve($key)
    {
        return static::$container->resolve($key);
    }

    // public static function bind($key, $resolver) // tohle je zatim na nic
    // {
    //     static::$container->bind($key, $resolver);
    // }

    // public static function Container() // tohle je zatim na nic
    // {
    //     return static::$container;
    // }
}
