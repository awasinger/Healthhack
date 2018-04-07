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
/*
        $sid = 'AC251a26c0ca40ea1123e041c193bd8ae9';
        $token = 'dab88a611cbb7ad86f79d584145f15e9';
        $client = new Client($sid, $token);

        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
            // the number you'd like to send the message to
            '+13148009111',
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => '+13143101429',
                // the body of the text message you'd like to send
                'body' => 'Hey '. Auth::user()->name . ' visit http://healthhack.local/form/' . Auth::user()->token . ' to fill out your daily checkup!',
            )
        );
*/
        return view('home');
    }

    public function show ($token) {
        return view('checkup');
    }
}
