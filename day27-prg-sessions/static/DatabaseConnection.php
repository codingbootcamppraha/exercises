<?php

class DatabaseConnection
{
    protected static $singleton = null;

    public static function singleton(): static
    {
        if (static::$singleton === null) {

            static::$singleton = new DatabaseConnection;

        }

        return static::$singleton;
    }

    protected function __construct()
    {
        var_dump('DATABASE CONNECTION IS BEING ESTABLISHED');
    }
}