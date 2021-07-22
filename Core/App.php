<?php
//This is a depency injecion container
// basically is assigning variables to other variables

class App {

    protected static $registry = [];
    //Here you stick the variable to the app
    public static function bind($key, $value) {

        static::$registry[$key] = $value;
    }
//and here to call the variable you sticked above 
    public static function get($key) {

        if (!array_key_exists($key, static::$registry)) {

            throw new \Exception("No {$key} is bound to this container");
        }
        return static::$registry[$key];
    }
}