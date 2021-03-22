<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($name = null) {
        
        return view('index', ['name' => $name]);
    }
}
