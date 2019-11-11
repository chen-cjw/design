<?php

class SingletonDemo
{
    private static $instance;

    private function __construct()
    {

    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function getInstance()
    {
        return self::getInstance();
    }

}
$s1 = SingletonDemo::getInstance();
var_dump($s1);

$s2 = SingletonDemo::getInstance();
var_dump($s2);