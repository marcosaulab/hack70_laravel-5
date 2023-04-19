<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\ComicRequest;

class ComicController extends Controller
{

    public function create() {
        return view('comics.create');
    }


    public function store(ComicRequest $request){

        // ! evaluation
        if($request->file('img') == null) {

            $img = 'default-image.jpg';

        } else {

            $img = $request->file('img')->store('public/comics'); 

        }
        
        // ! in file() specifico il nome del campo che proviene  dalla request
        // ! store() vede storage/app/public
        // ! viene salvato il file in storage/app/public/comics/nomefile.ext 
        // ! e ritorna il path con il nome del file (in hash)

        // dd($request);

        Comic::create([
            'title' => $request->input('title'),
            'editor' => $request->input('editor'),
            'genre' => $request->input('genre'),
            'img' => $img,
            'abstract' => $request->input('abstract'),
            'release_year' => $request->input('release_year')
        ]);

        return redirect()->route('home')->with('message', 'Comic inserito con successo!!');

    }

    public function show($id) {

        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));

    }

}
