<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utente;

class UtenteController extends Controller
{
    public function index() {

        $data = Utente::all();

        return view('utenti', compact('data'));
    }

    public function show($id) {
        $utente = Utente::find($id);

        return view('utente', compact('utente'));

    }
}
