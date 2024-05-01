<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index()
    {

        // // Tutti i film
        // $movies = Movie::all();

        // // Filtro con 2 parametri
        // $movies = Movie::where('title', 'Forrest Gump')->get();

        // // Filtro con 3 parametri
        // $movies = Movie::where('vote', '>', '8.7')->get();

        // // Filtro con orderBy
        $movies = Movie::where('vote', '>', '8.6')
            ->orderBy('title', 'desc')->get();

        // // Filtro con limit
        // $movies = Movie::where('vote', '>', '8.6')
        //     ->orderBy('title', 'desc')
        //     ->limit(3)->get();

        // // Filtro con first
        // $movie = Movie::where('vote', '>', '8.6')
        //     ->first();
        // dd($movie);

        // // Filtro con find
        // $movie = Movie::find(8); //il numero si riferisce all'id del film
        // dd($movie);


        return view('home', compact('movies'));
    }


    public function about()
    {


        return view('about');
    }


    public function contacts()
    {


        return view('contacts');
    }
}
