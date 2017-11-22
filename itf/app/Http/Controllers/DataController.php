<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    public function show(Request $request) {
        $titles = Data::select('title')->get();        
        $data = Data::where('title', $request->input('search'))->first();
        return view('welcome')
        ->with('data', $data)
        ->with('titles', $titles);
    }
}
