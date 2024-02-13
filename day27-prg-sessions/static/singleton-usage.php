<?php

require_once 'DatabaseConnection.php';

$connection = DatabaseConnection::singleton();

var_dump( $connection );

var_dump( DatabaseConnection::singleton() );

var_dump( DatabaseConnection::singleton() );

function foo()
{
    var_dump( DatabaseConnection::singleton() );
}

foo();

