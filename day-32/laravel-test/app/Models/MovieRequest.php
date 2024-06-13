<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieType;

class MovieRequest extends Model
{
    use HasFactory;

    public function movieType()
    {
        return $this->belongsTo(MovieType::class);
    }
}
