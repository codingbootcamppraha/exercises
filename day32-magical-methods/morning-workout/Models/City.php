<?php

class City
{
    public $id = null;
    public $name = null;
    public $country_id = null;
    public $district = null;
    public $population = null;

    public static function getCitiesForCountry(int $country_id): array
    {
        return DB::select('
            SELECT *
            FROM `cities`
            WHERE `country_id` = ?
        ', [
            $country_id
        ], 'City');
    }
}