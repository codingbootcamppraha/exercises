<?php

namespace Exercises\Testing;

class Math
{
    public static function multiply($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('The arguments must be numeric');
        }

        return $a * $b;
    }

    public static function divide($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('The arguments must be numeric');
        }

        return $a / $b;
    }
}