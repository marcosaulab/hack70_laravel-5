<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;
use App\Http\Requests\EditorRequest;

class EditorController extends Controller
{


    public function index() {
        $editors = Editor::orderBy('name', 'asc')->get();
        return view('editors.index', compact('editors'));
    }

    public function create(){
        return view('editors.create');
    }

    public function store(EditorRequest $request) {

        $img = $request->file('img')->store('public/editors');

        Editor::create([
            'name' => $request->input('name'),
            'foundation_year' => $request->input('foundation_year'),
            'description' => $request->input('description'),
            'img' => $img
        ]);

        return redirect()->route('home')->with('message', 'Editor inserito con successo!!');
        
    }
}
