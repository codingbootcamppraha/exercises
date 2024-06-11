<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Certification extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
