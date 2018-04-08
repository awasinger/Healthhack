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

Route::get('/home', 'UserController@index');

Route::get('/questionaire/{token}', 'PatientsController@index');

Route::get('/patients/create', 'PatientsController@create');

Route::post('/patients/create', 'PatientsController@store');

Route::get('/patients/{id}/ailments', 'PatientsController@selectAilments');

Route::post('/patients/ailments', 'PatientsController@update');

Route::get('/form/{token}', 'PatientsController@show');

Route::post('/form/{token}', 'PatientsController@update');

Route::get('/q', function () {
    return view('questionaire');
});

Route::get('/meds',function() {
  return view('medication');
});

Route::resource('users', 'UserController')->only([
    'edit'
]);
