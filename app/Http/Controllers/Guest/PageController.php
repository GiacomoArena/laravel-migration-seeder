<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $pizzas = Pizza::orderBy('price')->get();
        return view('home', compact('pizzas'));
    }
}
