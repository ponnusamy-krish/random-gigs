<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('welcome');
});






Route::get('/',function(){
    return view('listings',[
        "heading" =>"these are all latest listings",
        "name" => "john",
        "listing" => Listing::all()
    ]);
});


Route::get('/listing/{id}', function ($id) {
    return view('listing',
    [
        "heading" => "laravel"
    ]
    ,[ 
        'listing' => Listing::find($id)
    ]);
});
