<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return 'Je suis le controller TestController';
    }
    public function show(){
        return view('accueil');
    }
}
