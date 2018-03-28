<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //
    public function home()
    {
        $coffees = [
            'Winter Seasonal - Bali Blue Krishna',
            'Finca Cual Bicicleta - Hondouras Mircrolot',
            'Suplicar Clemencia Dark Roast',
            'Daymaker Blend'
        ];
        return view('contents/home', compact('coffees') );

    }
}