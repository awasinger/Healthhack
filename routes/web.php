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

Route::get('/home', 'PatientsController@index');

Route::get('/patients/create', 'PatientsController@create');

Route::post('/patients/create', 'PatientsController@store');

Route::get('/form/{token}', 'PatientsController@show');

Route::post('/form/{token}', 'PatientsController@update');

Route::get('/meds',function() {
  return view('medication');
});

Route::get('/questionaire', function() {
    return view('questionaire');
});



Route::resource('users', 'UserController')->only([
    'edit'
]);;


/*
    doctor selects from list of ailments, attach to user
    user doctor - set to 1 for MVP
*/
