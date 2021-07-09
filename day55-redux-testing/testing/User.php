<?php

/**
 * class User
 */
class User
{
    public $email = null;

    public function __construct($email = null)
    {
        if ($email !== null && false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('The given argument is not a valid email address');
        }

        $this->email = $email;
    }

    /**
     * uses the email property as the string
     * representation of User
     */
    public function __toString()
    {
        return $this->email;
    }
}