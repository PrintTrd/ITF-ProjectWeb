<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class IndexController extends Controller
{
    public function index() {
        $titles = Data::select('title')->get();
        return view('index')->with('titles', $titles);
    }
}
