<?php

class Session
{
    // ---- STATIC ----------------------------------------

    protected static ?Session $singleton = null;

    public static function instance(): static
    {
        if (static::$singleton === null) {

            static::$singleton = new static;

        }

        return static::$singleton;
    }

    // ----------------------------------------------------


    protected array $data = [];
    protected array $old_request = [];

    /**
     * code in this method will be executed only once
     * because only a SINGLE object will be created
     */
    protected function __construct()
    {
        // start the session
        session_start();

        // make a copy of everything in the session within
        // this object
        $this->data = $_SESSION;

        // adds the contents of $_SESSION['flashed_data'] (if there are any) to $this->data
        $this->data = array_merge($this->data, $_SESSION['flashed_data'] ?? []);

        // delete anything that was flashed - flashing DONE!
        unset($_SESSION['flashed_data']);

        $this->old_request = $_SESSION['flashed_request'] ?? [];

        // delete the flashed request from the session
        unset($_SESSION['flashed_request']);
    }

    /**
     * insert a new value into the data property
     */
    public function put(string $key, mixed $value): void
    {
        $this->data[$key] = $value;
    }

    /**
     * retrieve a value from the data property
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return $this->data[$key] ?? $default;
    }

    public function flash(string $key, mixed $value): void
    {
        $_SESSION['flashed_data'][$key] = $value;
    }

    /**
     * puts the entire request into session as flashed_request
     */
    public function flashRequest()
    {
        $_SESSION['flashed_request'] = $_POST;
    }

    public function old(string $key, mixed $default = null): mixed
    {
        return $this->old_request[$key] ?? $default;
    }
}