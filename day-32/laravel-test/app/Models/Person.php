<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
use App\Models\Position;

class Person extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class, 'movie_person');
    }
}
