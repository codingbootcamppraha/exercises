<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Language extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
