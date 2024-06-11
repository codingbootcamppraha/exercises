<?php

/**
 * DB class replicating the usage of \DB class in Laravel
 * 
 * Usage:
 * First a connection must be established:
 * 
 *   DB::connect('localhost', 'database_name', 'username', 'password');
 * 
 * Then all the methods from Laravel's DB class are available:
 * 
 *   $results       = DB::select($query, $values);
 *   $one_result    = DB::selectOne($query, $values);
 *   $rows_inserted = DB::insert($query, $values);
 *   $rows_updated  = DB::update($query, $values);
 *   $rows_deleted  = DB::delete($query, $values);
 *   $statement     = DB::statement($query, $values);
 * 
 * To get the last inserted id:
 *   
 *   $id = DB::getPdo()->lastInsertId();
 *   $id = DB::lastInsertId();
 * 
 * Furthermore there is a possibility to set the fetch mode for select:
 * 
 *   DB::setFetchMode('obj'); // fetch objects
 *   DB::IWantObjects();
 *   DB::IWantArrays();
 * 
 * There is also the possibility to select objects of a custom class:
 * 
 *   $results = DB::select($query, $values, 'CustomClass');
 *   $result  = DB::selectOne($query, $values, 'CustomClass');
 */

class DB
{
    protected static $pdo = null;
    protected static $fetch_mode = 'obj';

    public static function connect($host, $database, $user, $password)
    {
        try {
            
            static::$pdo = new PDO(
                "mysql:dbname={$database};host={$host};charset=utf8", 
                $user,
                $password
            );
     
            static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' . $e->getMessage());

            return false;
        }

        return true;
    }

    public static function getPdo()
    {
        if (!static::$pdo) {
            throw new Exception('Connection was not established. Run DB::connnect() first.');
        }

        return static::$pdo;
    }

    public static function statement($query, $values = [])
    {
        if (!is_array($values) && $values !== null) {
            $values = [$values];
        }

        // prepare the query
        $statement = static::getPdo()->prepare($query); 

        // execute the statement
        $success = $statement->execute($values);

        if(!$success) {
            // exit on error
            throw new Exception('Error in query: ' . static::getPdo()->errorInfo());

            return false;
        }

        // return the statement on success
        return $statement;
    }

    public static function select($query, $values = [], $class = null)
    {
        if ($statement = static::statement($query, $values)) {
            if ($class) {
                $statement->setFetchMode(PDO::FETCH_CLASS, $class);
            } else {
                static::setStatementFetchMode($statement);
            }

            return $statement->fetchAll();
        }

        return [];
    }

    public static function selectOne($query, $values = [], $class = null)
    {
        if ($statement = static::statement($query, $values)) {
            if ($class) {
                $statement->setFetchMode(PDO::FETCH_CLASS, $class);
            } else {
                static::setStatementFetchMode($statement);
            }

            return $statement->fetch();
        }

        return null;
    }

    public static function insert($query, $values = [])
    {
        if ($statement = static::statement($query, $values)) {

            return $statement->rowCount();
        }

        return 0;
    }

    public static function lastInsertId()
    {
        return static::getPdo()->lastInsertId();
    }

    public static function update($query, $values = [])
    {
        if ($statement = static::statement($query, $values)) {

            return $statement->rowCount();
        }

        return 0;
    }

    public static function delete($query, $values = [])
    {
        if ($statement = static::statement($query, $values)) {

            return $statement->rowCount();
        }

        return 0;
    }

    public static function setFetchMode($mode)
    {
        static::$fetch_mode = strtolower($mode);
    }

    public static function IWantObjects()
    {
        return static::setFetchMode('obj');
    }

    public static function IWantArrays()
    {
        return static::setFetchMode('assoc');
    }

    protected static function setStatementFetchMode($statement)
    {
        switch (static::$fetch_mode) {
            default:
            case 'obj':
            case 'object':
            case 'objects':
            case PDO::FETCH_OBJ:
                $statement->setFetchMode(PDO::FETCH_OBJ);
                break;
            case 'assoc':
            case 'associative':
            case 'array':
            case 'arrays':
            case PDO::FETCH_ASSOC:
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                break;
            case 'num':
            case 'numeric':
            case PDO::FETCH_NUM:
                $statement->setFetchMode(PDO::FETCH_NUM);
                break;
            case 'both':
            case PDO::FETCH_BOTH:
                $statement->setFetchMode(PDO::FETCH_BOTH);
                break;
        }
    }
}