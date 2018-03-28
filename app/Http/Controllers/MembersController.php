<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    //
    public function showMembers()
    {
        $famousDrinkers = [
            'Soren Kierkegaard',
            'Honore de Balzac', 
            'Theodore Roosevelt',
            'Voltaire',
            'Ludvig van Beethoven',
            'Johann Sebastian Bach'
        ];
        return view('contents/home', $famousDrinkers );
    }
}