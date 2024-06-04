<?php 
class Session
{
    public static $instance = null;
    public $data = null;

    public static function instance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    protected function __construct()
    {
        session_start();

        $this->data = $_SESSION;
    }

    public function put($key, $value)
    {
        $this->data[$key] = $value;
        $_SESSION[$key] = $value;
    }

    public function get($key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    //
}

// Session::instance
?>

