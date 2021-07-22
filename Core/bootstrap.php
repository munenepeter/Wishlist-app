<?php

// This file brings together all the files of the app in one
include_once "Database/Connection.php";
include_once "Database/QueryBuilder.php";
include_once 'App.php';


App::bind('config', require 'config.php');


//session_start
session_start();

/**
 *Bind the Database credentials and connect to the app
 *Bind the requred database file above to 
 *an instance of the connections
 */

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));