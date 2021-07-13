<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // config/comics.php
    $comics = config('comics');
    
    // var_dump($comics);
    // die();

    // Laravel
    // dd($comics);
    // dump($comics);

    // Blade (nell'html)
    // @dump($comicsArray)

    return view('home', 
        [
            'comicsArray' => $comics
        ]
    );
    
});
