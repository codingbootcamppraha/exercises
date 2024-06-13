<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieRequest;

class MovieRequestController extends Controller
{
    public function index()
    {
        $movie_requests = MovieRequest::with('movieType')
            ->get();

        // $movie_requests = MovieRequest::get();

        // dd($movie_requests);

        return view('movie-requests.index', compact('movie_requests'));
    }
}
