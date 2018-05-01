<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Coffee;

class CoffeeController extends Controller
{
    //
    public function index()
    //{
        //$coffees = Coffee::all();
        //return view('coffees.index', compact('coffees'));
    //}
    {
        //    Query builder syntax
        //     $coffees = DB::table('coffees')->get();
    
        //     Eloquent syntax
            $coffees =  Coffee::all();
    
            return view('coffees.index', compact('coffees'));
    }
    
    public function show(Coffee $coffee)
    {
        //$coffee = Coffee::find($id);

        return view('coffees.show', compact('coffee'));
    }
}