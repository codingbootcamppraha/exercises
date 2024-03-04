<?php

$path = $_SERVER['REQUEST_URI'];

var_dump($path);

$parts = explode('/', $path);

var_dump($parts);