<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Coffee;

class CoffeeController extends Controller
{
    //
    public function showCoffees()
    {
        $coffees = Coffee::all();
        return view('coffees.index', compact('coffees'));
    }
}
