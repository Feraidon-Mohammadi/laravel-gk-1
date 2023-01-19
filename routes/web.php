<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfosController;

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
    return view('welcome');
});


Route::get('/beispiel', function(){
        return '<h1>Beispiel</h1>';

});

Route::get('Feraidon', function (){
    return '<h1>Beispiel</h1>';
});

Route::get('user/{name}', function (){
    return '<h1>Hello Feraidon</h1>';
});

Route::get('user/{name}', function (){
    return '<h1>Hello '.$name.' </h1>';
});


Route::get('data', function (){
    return array(
        'Name' => 'Hans',
        'Nachname' => 'Mohammadi'
    );
});



Route::get('/rooms', function (){
    $id = request('id');
    return "<h1>Raum Nr. $id</h1>";
});





Route::get('/users', function(){
    return view('users');
});

/* self : um variablen in verschiden oder ander  page zu erkennen */
Route::get('/posts', function(){
    $page = request('page');
    $user = request('user');
    return view('posts', [
        'page' => $page,
        'user' => $user
    ]);
});

Route::get('/infos', [InfosController::class, 'show']);

/* Route::get('test', function(){
    return view('test');
});
 */

 Route::get('kommentar', function(){
    $comment = 'Hier ist alles <strong>super</strong>';
    return view('comment', [
        'kommentar' => $comment,
        'songs' =>  3,
        'loggedin' =>false

    ]);
 });


 /* Master / Child Templates  */
 Route::get('/child', function(){
    return view( 'child');
 });
 
 
 
 Route::get('/child2', function(){
    return view( 'child2');
 });


