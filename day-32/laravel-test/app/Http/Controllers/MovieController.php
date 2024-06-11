<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use DB;
use App\Models\Person;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::where('votes_nr', '>=', 10000)
            ->limit(20)
            ->orderBy('name')
            ->with('people', 'movieType')
            ->get();

        // $movies = DB::select('SELECT * FROM movies WHERE votes_nr >= 10000 LIMIT 20 ORDER BY name');
        // $movie = Movie::findOrFail(1);

        return view('movies.index', compact('movies'));
        // $movies_query = Movie::query();

        // if (isset($_GET['order'])) {
        //     $movies_query->orderBy('year', $_GET['order']);
        // }

        // $movies = $movies_query->get();
    }

    public function topRated()
    {
        $movies = DB::select('SELECT * FROM movies ORDER BY rating LIMIT 50');

        return view('movies.top-rated', compact('movies'));
    }

    public function shawshank()
    {
        $movie = DB::selectOne('SELECT * FROM movies WHERE name LIKE "%shawshank%"');
        
        $people = DB::select('SELECT people.*, movie_person.*, positions.name as position_name from people LEFT JOIN movie_person ON people.id = movie_person.person_id LEFT JOIN positions ON movie_person.position_id = positions.id WHERE movie_person.movie_id LIKE '.$movie->id);

        return view('movies.detail', compact('movie', 'people'));
    }

    public function show()
    {
        $movie = DB::selectOne('SELECT * FROM movies WHERE id LIKE ' . $_GET['id']);
        
        if ($movie) {
            $people = DB::select('SELECT people.*, movie_person.*, positions.name as position_name from people LEFT JOIN movie_person ON people.id = movie_person.person_id LEFT JOIN positions ON movie_person.position_id = positions.id WHERE movie_person.movie_id LIKE '.$movie->id);
        }

        return view('movies.detail', compact('movie', 'people'));
    }

    public function search()
    {
        $movies = $movie = DB::select('SELECT * FROM movies WHERE name LIKE "%' . $_GET['search'] .'%"');

        return view('movies.search', compact('movies'));
    }

    public function genreAction()
    {
        $movies = DB::select('SELECT movies.*, genre_movie.* FROM movies LEFT JOIN genre_movie ON genre_movie.movie_id = movies.id WHERE genre_movie.genre_id LIKE 31');

        return view('movies.index', compact('movies'));
        
    }

    public function byGenre()
    {
        $genre = DB::selectOne('SELECT * FROM genres WHERE slug LIKE "'.$_GET['slug'].'"');

        $movies = DB::select('SELECT movies.*, genre_movie.*, genres.slug as genre_slug, genres.id as genre_id FROM movies LEFT JOIN genre_movie ON genre_movie.movie_id = movies.id LEFT JOIN genres ON genre_movie.genre_id = genres.id WHERE genres.slug LIKE "' . $_GET['slug']. '"');

        return view('movies.by-genre', compact('movies', 'genre'));
    }
    
}
