<?php

// This file brings together all the files of the app in one
include_once "Database/Connection.php";
include_once "Database/QueryBuilder.php";
include_once 'App.php';
include_once 'Request.php';

session_start();

App::bind('config', require 'config.php');


//session_start
 

/**
 *Bind the Database credentials and connect to the app
 *Bind the requred database file above to 
 *an instance of the connections
 */

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));




/**
 * This is just a debuging function
 * 
 * @param mixed $variable Varible to be dumped
 * 
 * @return mixed $variable & Kill the program 
 */

function dd($variable) { 
    return die(var_dump($variable));
}