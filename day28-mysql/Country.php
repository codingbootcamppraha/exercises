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


    public function getFormattedPopulation()
    {
        return number_format($this->population, 0, '.', ' ');
    }

    public function getCapitalCity()
    {
        $city = DB::selectOne("
            SELECT *
            FROM `cities`
            WHERE `id` = ?
            LIMIT 1
        ", [
            $this->capital_city_id
        ]);

        return $city;
    }
}