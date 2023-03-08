<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class metodosController extends Controller
{
    function index(){
        return view('form');
    }
}
