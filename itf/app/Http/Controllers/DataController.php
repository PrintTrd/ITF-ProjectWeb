<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    public function show(Request $request) {
        $data = Data::where('title', $request->input('search'))->first();
        return view('welcome')->with('data', $data);
    }
}
