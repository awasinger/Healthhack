<?php
use Twilio\Rest\Client;
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
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/form/{token}', 'HomeController@show');

Route::get('/meds',function() {
  return view('medication');
});


Route::post('/form/{token}', 'HomeController@');

/*
    doctor selects from list of ailments, attach to user
    user doctor - set to 1 for MVP
*/
