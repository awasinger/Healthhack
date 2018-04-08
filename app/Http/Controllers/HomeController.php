<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        /* if ($user->has('doctor')) { */
        /*     return view('home'); */
        /* } */

        return redirect()->action('UserController@edit', ['id' => $user->id])->with('status', 'Profile updated!');

    }

    public function show ($token) {
        return view('checkup');
    }
}
