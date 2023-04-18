<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function showHomePage()
    {
        $comics = Comic::all(); // ! seleziono tutte le righe del database e ritorna una Collection
                                // ! ovvero un array di oggetti Comic
        return view('welcome', compact('comics')); // ! cerca all'interno dello scope della funzione una
                                                   // ! variabile che ha il nome che ho specificato: "comics"
                                                   // ! e crea un vettore chiave => valore
    }
}
