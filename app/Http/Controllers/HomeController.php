<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function twilio(Request $request) {
        // Required if your environment does not handle autoloading
        
        // Use the REST API Client to make requests to the Twilio REST API
        
        
        // Your Account SID and Auth Token from twilio.com/console
        $sid = 'AC63952eab1cd99e1287de0d9be72f1f71';
        $token = '8bd43f45b88b4751e17f35edc1965184';
        $client = new Client($sid, $token);
        
        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
            // the number you'd like to send the message to
            '+13142253942',
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => '+15012146091',
                // the body of the text message you'd like to send
                'body' => 'Hey'. Auth::user()->name.' Good luck on the bar exam!'
            )
        );

    }
}
