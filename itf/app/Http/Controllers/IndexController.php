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
    public function suggest() {
        $titles = Data::select('title')->get();
        return view('suggest')->with('titles', $titles);
    }
    public function play() {
        $titles = Data::select('title')->get();
        return view('play')->with('titles', $titles);
    }
    public function about() {
        $titles = Data::select('title')->get();
        return view('about')->with('titles', $titles);
    }

}

