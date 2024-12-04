<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('HomeController.index');
    }

    public function services(){
        return view('HomeController.services');
    }

    public function about(){
        return view('HomeController.about');
    }

    public function contact(){
        return view('HomeController.contact');
    }

    public function details(){
        return view('HomeController.details');
    }

    public function portfolio(){
        return view('HomeController.portfolio');
    }

    public function pricing(){
        return view('HomeController.pricing');
    }
    public function form(request $request){
        if($request-> ismethod('POST'))
        {
            $request->validate([
                'nom'=>'required',
                'prnm'=>'required',
                'email'=>'required|email',
                'tel'=>'required|numeric|digits:10|regex:/^0[5-8]$/',
                'sex'=>'required',
                'filiere'=>'required',
                'option'=>'required',
                'mssg'=>'between:30,100',
                'photo'=>'image|max:2048'
            ]);
        };
        return view('Homecontroller.form'); 
    }
}
