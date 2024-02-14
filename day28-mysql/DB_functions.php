<?php

/**
 * A set of functions providing interface for working with the DB class
 * if using global functions is more convenient than using static methods
 * 
 * Usage:
 * 
 * $results       = select($query, $values);
 * $one_result    = select_one($query, $values);
 * $rows_inserted = insert($query, $values);
 * $rows_updated  = update($query, $values);
 * $rows_deleted  = delete($query, $values);
 * $statement     = statement($query, $values);
 * 
 * To get the last inserted id:
 *   
 * $id = last_insert_id();
 * 
 * Furthermore there is a possibility to set the fetch mode for select:
 * 
 *   set_fetch_mode('obj'); // fetch objects
 *   i_want_objects();
 *   i_want_arrays();
 * 
 * There is also the possibility to select objects of a custom class:
 * 
 *   $results = select($query, $values, 'CustomClass');
 *   $result  = select_one($query, $values, 'CustomClass');
 */

if (!class_exists('DB')) {
    die('Error: class DB not found. Please require it before requiring '.__FILE__);
}

function connect($host, $database, $user, $password)
{
    return DB::connect($host, $database, $user, $password);
}

function statement($query, $values = [])
{
    return DB::statement($query, $values);
}

function select($query, $values = [], $class = null)
{
    return DB::select($query, $values, $class);
}

function select_one($query, $values = [], $class = null)
{
    return DB::selectOne($query, $values, $class);
}

function insert($query, $values = [])
{
    return DB::insert($query, $values);
}

function last_insert_id()
{
    return DB::getPdo()->lastInsertId();
}

function update($query, $values = [])
{
    return DB::update($query, $values);
}

function delete($query, $values = [])
{
    return DB::delete($query, $values);
}

function set_fetch_mode($mode)
{
    return DB::setFetchMode($mode);
}

function i_want_objects()
{
    return DB::IWantObjects();
}

function i_want_arrays()
{
    return DB::IWantArrays();
}