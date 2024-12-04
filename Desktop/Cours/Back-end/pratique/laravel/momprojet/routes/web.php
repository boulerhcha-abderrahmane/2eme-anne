<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BaseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/details',[HomeController::class,'details'])->name('details');
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');
Route::get('/pricing',[HomeController::class,'pricing'])->name('pricing');
Route::match(['get','post'],'/form',[ProduitController::class,'form']);
Route::resource('produits', ProduitController::class);



// ------------------------------ TP5 ROUTING ---------------------------------
Route::get('/home',function(){
    return 'Bonjour laravel';
});
Route::get('/accueil',function(){
    return view('accueil');
});
Route::get('/tst',[TestController::class,'index']);
Route::get('/show',[TestController::class,'show']);
Route::view('/acc','accueil')->name('accueil');
Route::view('/test','test');
Route::get('/home/{prenom}/{age?}',function($prenom,$age=7){
    return "bonjour $prenom voytre age est $age ans";
});

// ------------------------------ TP5 Controller ---------------------------------
Route::get('/one',[BaseController::class,'oneMethode']);
Route::get('/two',[BaseController::class,'twoMethode']);
Route::get('/three',[BaseController::class,'threeMethode']);

// ------------------------------ TP5 Middlewares ---------------------------------
Route::get('/accueil', function () {
    return view('accueil');
})->middleware('age');
Route::get('/contact', function () {
    return view('contact');
})->middleware('user');
Route::get('/tstt', function () {
    return view('tst');
})->middleware('test');

Route::get('/aya', function() {
    echo 'page1';
    return view('aya.test1');
})->name('route1');
// Route::get('{p}', function($p){
//     echo 'je suis la route '.$p ;
// });
Route::get('/route2/{name?}', function($name=null){
    return $name;
});