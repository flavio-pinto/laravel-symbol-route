<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {
    public function index() {
        $cosa_vendiamo = [
            'Molluschi',
            'Trattori',
            'Cristiano Ronaldo',
            'Topolino',
            'Peschereccio'
        ];
        return view('about', compact('cosa_vendiamo'));
    }
}
