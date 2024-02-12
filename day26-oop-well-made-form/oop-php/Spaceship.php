<?php

class Spaceship
{
    public $name = null;
    public $dock = null;

    public function __construct($name)
    {
        $this->name = $name;
        // JS: this.name = name;

        $this->dock = 'earth';
    }
}

