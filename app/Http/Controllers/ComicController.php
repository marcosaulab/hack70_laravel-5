<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function create() {
        return view('comics.create');
    }


    public function store(Request $request){

        Comic::create([
            'title' => $request->input('title'),
            'editor' => $request->input('editor'),
            'genre' => $request->input('genre'),
            'img' => $request->input('img'),
            'abstract' => $request->input('abstract'),
            'release_year' => $request->input('release_year')
        ]);

        return redirect()->route('home')->with('message', 'Comic inserito con successo!!');

    }

}
