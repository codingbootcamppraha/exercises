<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ActorController extends Controller
{
    public function show()
    {
        $actor = DB::selectOne('SELECT * FROM people WHERE id LIKE ' . $_GET['id']);

        $actor_movies = DB::select('SELECT movies.*, movie_person.* FROM movies LEFT JOIN movie_person ON movie_person.person_id = '. $actor->id .' WHERE movie_person.movie_id = movies.id');

        return view('actors.detail', compact('actor', 'actor_movies'));
    }
}
