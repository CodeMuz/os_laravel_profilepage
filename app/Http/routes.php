<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Skill;
use App\Competency;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/work/{page}', function ($page) {
    return view('work/'.$page, [
    ]);
});

Route::get('/about', function () {

    $skills = Skill::orderBy('created_at', 'asc')->get();
    $competency = Competency::orderBy('created_at', 'asc')->get();

    return view('about', [
        'skills' => $skills,
        'compentency' => $competency
    ]);

});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', 'UserController@sendContactEmail');