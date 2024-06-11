<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\MovieType;
use App\Models\Genre;
use App\Models\Language;
use App\Models\OriginCountry;
use App\Models\MovieStatus;

class Movie extends Model
{
    use HasFactory;

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }

    public function movieType()
    {
        return $this->belongsTo(MovieType::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function certification()
    {
        return $this->belongsTo(Certification::class);
    }

    public function originCountries()
    {
        return $this->belongsToMany(OriginCountry::class, 'movie_origin_country', 'movie_id', 'movie_origin_country_id');
    }

    public function movieStatus()
    {
        return $this->belongsTo(MovieStatus::class);
    }
}