<?php

class Country
{
    public $id = null;
    public $code = null;
    public $code_alpha2 = null;
    public $name = null;
    public $continent = null;
    public $continent_id = null;
    public $region = null;
    public $surface_area = null;
    public $population = null;
    public $gnp = null;
    public $head_of_state = null;
    public $capital_city_id = null;

    protected $relationships = [];

    public function __get($property_name)
    {
        if (array_key_exists($property_name, $this->relationships)) {
            // if this data has already been loaded, return it
            return $this->relationships[$property_name];
        }

        // when we try to access ->cities
        if ($property_name === 'cities') {
            // select cities for country and put it
            // into this object's relationships
            $this->relationships['cities'] = City::getCitiesForCountry($this->id);

            // return the loaded cities
            return $this->relationships['cities'];
        }

        // when we try to access ->capital_city
        if ($property_name === 'capital_city') {
            $this->relationships['capital_city'] = DB::selectOne("
                SELECT *
                FROM `cities`
                WHERE `id` = ?
            ", [
                $this->capital_city_id
            ], 'City');

            return $this->relationships['capital_city'];
        }

        // when we try to access ->today
        if ($property_name === 'today') {
            $this->relationships['today'] = 'Tuesday';

            return $this->relationships['today'];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $property_name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE
        );
    }

    public static function getCountryByCode(string $code): ?Country
    {
        return DB::selectOne('
            SELECT *
            FROM `countries`
            WHERE `code_alpha2` = ?
        ', [
            $code
        ], 'Country');
    }
}