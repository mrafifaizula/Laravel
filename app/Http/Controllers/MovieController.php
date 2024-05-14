<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Movie;
class MovieController extends Controller
{
    // melihat sama data yang ada di dalam model "movie"
    public function getMovie()
    {
        // melihat semua data yang ada di dalam model "movie"
        $movies = Movie::all();

        // dump data atau melihat isi data dari sebuah varible
        // dd($movies);

        // passing data movie ke view "movie.index"
        return view('movie.index', compact('movies'));
    }
    public function getMovieById($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }
}
