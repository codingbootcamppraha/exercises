<?php

class City
{
    public $id = null;
    public $name = null;
    public $country_id = null;
    public $district = null;
    public $population = null;

    public static function getCitiesForCountry($country_id)
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