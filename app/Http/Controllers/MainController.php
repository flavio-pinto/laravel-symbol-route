<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {
    public function index() {
        $nome = 'Flavio';
        $cognome = 'Pinto';
        $classe = 'Classe #12';
        return view( 'welcome', compact('nome', 'cognome', 'classe'));
    }
}
