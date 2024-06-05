<?php 
class Session
{
    public static $instance = null;
    public $data = null;
    public $old_request = null;

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

        // add flashed data (success/error messages)
        $this->data = array_merge($this->data, $_SESSION['flashed_data'] ?? []);
        unset($_SESSION['flashed_data']);

        // add flashed request
        $this->old_request = $_SESSION['flashed_request'] ?? [];
        unset($_SESSION['flashed_request']);
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

    public function flash($key, $value)
    {
        $_SESSION['flashed_data'][$key] = $value;
    }
    
    public function flashRequest()
    {
        $_SESSION['flashed_request'] = $_POST;
    }

    public function old($key, $default = null)
    {
        return $this->old_request[$key] ?? $default;
    }
}

// Session::instance()
// Session::data !!!!   < session()->data
?>

