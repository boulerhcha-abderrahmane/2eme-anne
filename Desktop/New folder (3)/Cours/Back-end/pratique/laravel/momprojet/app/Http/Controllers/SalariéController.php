<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salarié;

class SalariéController extends Controller
{
    public function AfficherlisteSalariés(){
        $salariés = Salarié::all();
        return view('salariés.index',[ 'salariés'=>$salariés ]);
    }
}
