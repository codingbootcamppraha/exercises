<?php

/**
 * BOOTSTRAP
 * (this is what Composer would do)
 */

// require all necessary files
require_once 'Libraries/DB.php';
require_once 'Models/City.php';
require_once 'Models/Country.php';




/**
 * SETUP
 * (this is what Laravel would do)
 */

// connect to the database
DB::connect('127.0.0.1', 'world', 'root', '');




/**
 * APPLICATION LOGIC
 * (This is what a controller would do)
 */

// retrieve a Country object
$country = Country::getCountryByCode('CZ');




/**
 * RESPONSE
 * (This is what a view would do)
 */

// display the output
include 'Views/view.php';