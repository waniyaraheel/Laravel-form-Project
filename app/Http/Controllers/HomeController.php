<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;


class HomeController extends Controller
{

    
    public function createForm()
    {
        return view('form'); 
    }

    public function store(Request $request)
    {
    
        $request->validate([
            'title' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        
        Country::create([
            'title' => $request->title,
            'city' => $request->city,
        ]);


        return redirect()->route('listdata');

    }

    
    public function listData()
    {
        $countries = Country::all(); 
        return view('list', compact('countries'));
    }
}