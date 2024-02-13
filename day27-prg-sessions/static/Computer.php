<?php

class Computer
{
    public static int $latestWindowsVersion = 11;

    public ?string $model = null;
    public ?string $os = null;

    public function setOS(string $os): void
    {
        $this->os = $os;
    }

    public static function getLatestWindowsVersion()
    {
        return static::$latestWindowsVersion;
    }
}