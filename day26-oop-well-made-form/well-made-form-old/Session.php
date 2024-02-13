<?php

class Session
{
    // this is where ONE object of this class will be kept:
    public static ?self $instance = null;

    /**
     * returns a single object of the class Session
     *
     * first time it creates it, other times it just
     * returns the created one
     */
    public static function instance() : self
    {
        // if the value of this class' static property $instance
        // is still null
        if (static::$instance === null) {

            // create an instance of this class and put it in
            // the static property $instance
            //                  new Session
            static::$instance = new static;
        }

        // return the static property $instance
        return static::$instance;
    }


    // this is where we will keep the session data:
    public array $data = [];

    // this is where we will keep data from the previous request's $_POST
    public array $old_request = [];

    /**
     * "protected" so that objects of this class can be created
     * only from methods of this class (namely ::instance())
     */
    protected function __construct()
    {
        // this will happen just ONCE for entire application
        // because we create an object of this class just ONCE
        // thanks to the singleton pattern

        session_start();

        // store all the data currently in the session in this object's property
        $this->data = $_SESSION;

        // adds the contents of $_SESSION['flashed_data'] (if there are any) to $this->data
        $this->data = array_merge($this->data, $_SESSION['flashed_data'] ?? []);

        // actually delete flashed_data from the session - reliable flashing
        unset($_SESSION['flashed_data']);

        $this->old_request = $_SESSION['flashed_request'] ?? [];

        unset($_SESSION['flashed_request']);
    }

    /**
     * puts a value into the $this->data property under a specific key
     */
    public function put($key, $value)
    {
        // put the value into this object
        $this->data[$key] = $value;

        // put the value into the session itself (this changes the session file)
        $_SESSION[$key] = $value;
    }

    /**
     * retrieves data from the session
     *
     * if not found, returns the second argument
     */
    public function get($key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    /**
     * puts the value under the given key into 'flashed_data' element
     * of the session data
     *
     * like that, if the entire 'flashed_data' element is removed from
     * the session, all the flashed data will be gone!
     */
    public function flash($key, $value)
    {
        $_SESSION['flashed_data'][$key] = $value;
    }

    /**
     * put the entire $_POST request into the session
     * under a specific key
     */
    public function flashRequest()
    {
        $_SESSION['flashed_request'] = $_POST;
    }

    /**
     * retrieve data from the previous ("old") request
     */
    public function old($key, $default = null)
    {
        return $this->old_request[$key] ?? $default;
    }
}