<?php
    function session()
    {
        return Session::instance();
    }

    function old($key, $default = null)
    {
        return session()->old($key, $default);
    }
?>