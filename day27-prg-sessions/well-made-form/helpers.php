<?php

use PolakJan\Tools\Session;

/**
 * functions that help us easily call long class/method names
 */

function session(): Session
{
    return Session::instance();
}


function old(string $key, mixed $default = null): mixed
{
    return session()->old($key, $default);
}

function redirect($url)
{
    header('Location: ' . $url);
    exit();
}