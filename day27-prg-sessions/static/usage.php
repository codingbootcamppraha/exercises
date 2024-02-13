<?php

require_once 'Computer.php';

$my_computer = new Computer;
$your_computer = new Computer;
$his_computer = new Computer;

$my_computer->model = 'Lenovo ThinkBook';

$your_computer->model = 'Macbook Air';

$his_computer->setOS('Windows 10');

var_dump($my_computer);
var_dump($your_computer);
var_dump($his_computer);

var_dump( Computer::$latestWindowsVersion );

Computer::$latestWindowsVersion = 12;

var_dump( Computer::getLatestWindowsVersion() );